/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**/*.{html,js,css,php}"
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#008C50',
        'secondary': '#F1E610',
        'gray': '#303030',
        'dark-gray': '#222222',
      },
      screens: {
        '3xl': '2124px'
      },
      width: {
        '38': '9.29rem',
        '800': '50rem',
        '400': '26.75rem'
      }
    },
  },
  plugins: [],
}
