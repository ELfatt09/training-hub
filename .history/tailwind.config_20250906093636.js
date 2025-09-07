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
        marquee: 'marquee 10s linear infinite',
        marquee20: 'marquee 20s linear infinite',
      },
            boxShadow: {
                'solid-teal': '24px 24px 0px 0px #03585A',
            },

            colors: {
                primary: '#03585A',
                secondary: '#14A4AD',

                lightoff: '#F8F8F8',
                darkoff:'#7F7C7C',

                milk: '#FFF8F8',
            },

            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                jakarta: ['Plus Jakarta Sans', 'sans-serif'],
            },
        },
    },

    plugins: [
        forms
    ],
    
};
