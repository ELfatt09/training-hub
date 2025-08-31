import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
             keyframes: {
        marquee: {
          '0%': { transform: 'translateX(0)' },
          '100%': { transform: 'translateX(-50%)' }, // geser separo
        },
      },
      animation: {
        marquee: 'marquee 20s linear infinite',
      },
            boxShadow: {
                'solid-teal': '6px 6px 0px 0px #03585A',
            },

            colors: {
                primary: '#03585A',
                secondary: '#14A4AD',

                milk: '#FFF8F8',
            },

            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                jakarta: ['"Plus Jakarta Sans"', 'sans-serif'],
            },
        },
    },

    plugins: [forms],
};
