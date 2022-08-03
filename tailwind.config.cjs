/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
	content: ['./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}'],
	theme: {
		fontSize: {
			'xxl': '6.25rem',
			'xl': '4rem',
			'h1': '3.375rem',
			'h2': '3rem',
			'h3': '1.875rem',
			'h4': '1.5rem',
			'lead': '1.31rem',
			'lg': '1.125rem',
			'base': '1rem',
			'sm': '.875rem',
			'tiny': '.875rem',
			'xs': '.75rem',
		},
		extend: {
			fontFamily: {
				'sans': ['Roboto', ...defaultTheme.fontFamily.sans],
				'heading': ['Poppins', 'Roboto', ...defaultTheme.fontFamily.sans],
			},
			colors: {
				brand: {
					DEFAULT: '#14cdab',
					dark: '#1F1646',
					darker: '#191334',
					light: '#ffffff',
					lightGrey: '#E6E7E8',
					mint: '#D7FCF8',
					action: '#F15159',
					midblue: '#207299',
					skyblue: '#0DD3FA',
				}
			},
		},
	},
	plugins: [
		require('@tailwindcss/typography'),
		require('@tailwindcss/forms')
	],
}
