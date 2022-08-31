const API_URL = import.meta.env.WP_URL;
const GRAPH_API_URL = API_URL + '/graphql';

async function fetchAPI(query, { variables } = {}) {
  const headers = { 'Content-Type': 'application/json' };
  const res = await fetch(GRAPH_API_URL, {
    method: 'POST',
    headers,
    body: JSON.stringify({ query, variables }),
  });

  const json = await res.json();
  if (json.errors) {
    console.log(json.errors);
    throw new Error('Failed to fetch API');
  }

  return json.data;
}

export async function getAllPostsWithSlugs(num = 1000, lang = "en") {
  const data = await fetchAPI(`
    {
        posts(first: ${num}, where: {wpmlLanguage: "${lang}"}) {
        edges {
          node {
            slug, title, date
          }
        }
      }
    }
    `);
  return data?.posts;
}

export async function getHeadMeta(path) {
  const url = new URL(path, 'https://motto.ca');
  const wpMetaRequest = await fetch(`${API_URL}/wp-json/rankmath/v1/getHead?url=${url.href}`);
  return await wpMetaRequest.json();
}

export async function getRecentPosts(num = 12, lang = "en") {
  const data = await fetchAPI(`{
      posts(first: ${num}, where: {wpmlLanguage: "${lang}"}) {
      edges {
        node {
          slug
          uri
          title
          date
          content
          author {
            node {
              avatar {
                scheme
                url
                default
                extraAttr
              }
              name
              slug
              uri
            }
          }
          featuredImage {
            node {
              altText
              mediaDetails {
                sizes {
                  sourceUrl
                }
              }
            }
          }
        }
      }
    }
  }`);

  return data.posts.edges.map(({ node }) => {
    const { uri, title, date, content, featuredImage, author } = node;
    return {
      title,
      href: uri,
      datetime: date,
      date: formatDate(date),
      content,
      imageAlt: featuredImage?.node.altText,
      imageUrl: featuredImage?.node.mediaDetails.sizes[1].sourceUrl,
      author: {
        name: author?.node.name,
        imageUrl: author?.node.avatar.url,
      }
    }
  });
}

export async function getPost(slug) {
  const data = await fetchAPI(`{
    post(id: "${slug}", idType: URI) {
      title
      content
      uri
      date
      author {
        node {
          avatar {
            scheme
            url
            default
            extraAttr
          }
          name
          slug
          uri
        }
      }      
      featuredImage {
        node {
          altText
          mediaDetails {
            sizes {
              sourceUrl
            }
          }
        }
      }
    }
  }`);

  const { title, date, content, featuredImage, author, uri } = data.post;
  return {
    title,
    href: uri,
    datetime: date,
    date: formatDate(date),
    content,
    imageAlt: featuredImage?.node.altText,
    imageUrl: featuredImage?.node.mediaDetails.sizes[1].sourceUrl,
    author: {
      name: author?.node.name,
      imageUrl: author?.node.avatar.url,
    }
  }
}

function formatDate(date) {
  return (new Date(date)).toLocaleDateString("en-CA", { year: 'numeric', month: 'long', day: 'numeric' });
}

function readingTime(text) {
  const wpm = 225;
  const words = text.trim().split(/\s+/).length;
  return Math.ceil(words / wpm);
}