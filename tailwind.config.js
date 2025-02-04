
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            keyframes: {
                marquee: {
                    '0%': {
                        transform: 'translateX(0)'
                    },
                    '100%': {
                        transform: 'translateX(-100%)'
                    },
                },

            },
            // Add custom animations
            animation: {
                'marquee': 'marquee 20s linear infinite',
            },
            fontFamily: {
                unna: ['Unna', 'serif'],
                roboto: ['Roboto', 'serif'],
            },
            fontWeight: {
                regular: '400',
                semibold: '600',
                bold: '700',
            },
            colors: {
                white: '#fff',
                black: '#000',
                primary: '#18333b',
                secondary: '#67797e',
                ternary: '#88a5ad',
                accent: '#fe5b2c',
                alter: '#13282f',
                gray: '#f7f7f7',
                border: '#dddddd',
            },

        },
    },
    plugins: [],
};



