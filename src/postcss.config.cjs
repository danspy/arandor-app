module.exports = {
  plugins: [
    require('postcss-import-ext-glob'),
    require('postcss-import'),
    require('tailwindcss/nesting'),
    require('autoprefixer'),
    require('tailwindcss'),
  ],
}

