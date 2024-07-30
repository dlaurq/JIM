/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
  theme: {
    extend: {},
      fontFamily: {
          rubik: ['Rubik', 'sans-serif'], // Use "Open Sans" as the default sans-serif font
      },
  },
  plugins: [
      require('@tailwindcss/forms'),
  ],
}

