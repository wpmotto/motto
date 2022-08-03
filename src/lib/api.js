const API_URL = import.meta.env.WP_URL;

async function fetchAPI(query, { variables } = {}) {
  const headers = { 'Content-Type': 'application/json' };
  const res = await fetch(API_URL, {
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

export async function getAllPostsWithSlugs(num = 10000) {
  const data = await fetchAPI(`
    {
        posts(first: ${num}) {
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

export async function getAllPagesWithSlugs() {
  const data = await fetchAPI(`
    {
      pages(first: 10000) {
        edges {
          node {
            slug
          }
        }
      }
    }
    `);
  return data?.pages;
}

export async function getPageBySlug(slug) {
  const data = await fetchAPI(`
    {
      page(id: "${slug}", idType: URI) {
        title
        content
      }
    }
    `);
  return data?.page;
}

export async function getPostBySlug(slug) {
  const data = await fetchAPI(`
    {
      post(id: "${slug}", idType: URI) {
        title
        content
      }
    }
    `);
  return data?.post;
}