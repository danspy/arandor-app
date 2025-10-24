/** @type {import('tailwindcss').Config} */
export default {
  important: true,
  content: [
    './src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}',
  ],
  theme: {
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
      },
      fontFamily: {
        'cormorant': ['Cormorant Unicase', 'serif'],
        'lustria': ['Lustria', 'serif'],
      },
    },
  },
  plugins: [],
}
