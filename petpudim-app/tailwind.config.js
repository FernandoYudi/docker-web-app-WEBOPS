const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
          colors: {
            'purple-200': '#3E0043',
            'purple-100': '#760081',
            'purple-50': '#7e0696',
            'gray-200': '#C4C4C4',
            'gray-100': '#DCD8DC',
            'white': '#FFFFFF',
          },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};