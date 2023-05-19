/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./packages/tailwind_demo_base/Resources/Private/**/*.{html,js}"],
  theme: {
    extend: {
      aria: {
        current: 'current="page"',
      },
    },
  },
  plugins: [],
}

