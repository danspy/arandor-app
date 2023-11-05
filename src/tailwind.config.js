/** @type {import('tailwindcss').Config} */
export default {
  important: true,
  content: [
    '../kirby/**/*.{php,html,js}',
    '../site/**/*.{php,html,js}',
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

