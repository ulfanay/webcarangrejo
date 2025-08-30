/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './vendor/filament/**/*.blade.php', // ini penting untuk filament!
  ],
  theme: {
    extend: {},
  },
  plugins: [require('daisyui')],
}

