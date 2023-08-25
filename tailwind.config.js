/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./assets/**/*.{html,js,php}",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        colors: {
            '66B645': '#66B645',
            'F3F3F3': '#F3F3F3',
            '8A8A8A': '#8A8A8A',
            'E7E7E7': '#E7E7E7',
        },
        screens: {
            'sm': '576px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
            'xxl': '1440px',
        },
        container: {
            center: true,
            padding: {
                'DEFAULT': '0.5rem',
                'sm': '0.5rem',
                'md': '1rem',
                'lg': '1.5rem',
                'xl': '2rem',
                'xxl': '2.5rem',
            }

        },
        extend: {},
    },
    plugins: [
        require('flowbite/plugin')
    ],
}

