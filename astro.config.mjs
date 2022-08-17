import { defineConfig } from 'astro/config';
import preact from '@astrojs/preact';
import tailwind from "@astrojs/tailwind";
import astroI18next from "astro-i18next";

export default defineConfig({
  experimental: {
    integrations: true,
  },
  integrations: [
    preact(),
    tailwind(),
    astroI18next({
      baseLocale: "en",
      i18next: {
        debug: true, // convenient during development to check for missing keys
        supportedLngs: ["en", "fr"],
      },
    }),
  ],
});