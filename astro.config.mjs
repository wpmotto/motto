import { defineConfig } from 'astro/config';
import preact from '@astrojs/preact';
import tailwind from "@astrojs/tailwind";
import astroI18next from "astro-i18next";
import image from "@astrojs/image";
import mdx from "@astrojs/mdx";

// https://astro.build/config
export default defineConfig({
  integrations: [preact(), tailwind(),
  astroI18next({
    baseLanguage: "en",
    i18next: {
      debug: true,
      // convenient during development to check for missing keys
      supportedLngs: ["en", "fr"]
    }
  }),
  image(), mdx()],
  vite: {
    ssr: {
      external: ["svgo"]
    }
  }
});