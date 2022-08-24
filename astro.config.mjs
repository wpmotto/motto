import { defineConfig } from 'astro/config';
import preact from '@astrojs/preact';
import tailwind from "@astrojs/tailwind";
import astroI18next from "astro-i18next";
import sitemap from "@astrojs/sitemap";
import mdx from '@astrojs/mdx';
import partytown from '@astrojs/partytown';
import robotsTxt from 'astro-robots-txt';

export default defineConfig({
  site: "https://motto.ca/",
  trailingSlash: 'always',
  experimental: {
    integrations: true,
  },
  integrations: [
    preact(),
    tailwind(),
    mdx(),
    robotsTxt(),
    partytown({
      // Adds dataLayer.push as a forwarding-event.
      config: {
        forward: ["dataLayer.push"],
      },
    }),
    sitemap({
      i18n: {
        defaultLocale: "en", // All urls that don't contain `es` or `fr` after `https://stargazers.club/` will be treated as default locale, i.e. `en`
        locales: {
          en: "en", // The `defaultLocale` value must present in `locales` keys
          fr: "fr",
        },
      },
    }),
    astroI18next({
      baseLocale: "en",
      supportedLocales: ["en", "fr"],
      i18next: {
        debug: true,
        initImmediate: false,
        backend: {
          loadPath: "./src/locales/{{lng}}.json",
        },
      },
      i18nextPlugins: { fsBackend: "i18next-fs-backend" },
    }),
  ],
  vite: {
    ssr: {
      external: ["svgo"]
    }
  }
});