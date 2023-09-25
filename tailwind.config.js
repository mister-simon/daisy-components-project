/** @type {import('tailwindcss').Config} */
export default {
    content: [],
    theme: {
        extend: {},
    },
    content: [
        './app/**/*.php',
        './resources/**/*.php',
        "./vendor/mister-simon/daisy-components/src/**/*.php",
        "./vendor/mister-simon/daisy-components/resources/**/*.php"
    ],
    plugins: [
        require('@tailwindcss/typography'),
        require("daisyui")
    ],
    daisyui: {
        themes: ['dark'],
    }
}

