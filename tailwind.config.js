const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    darkMode: 'media',
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                florange: {
                    light: '#d67935',
                    default: '#cc5803',
                    dark: '#8e3d02',
                  },
                floblue: {
                    light: '#83a6b6',
                    default: '#4e8098',
                    dark: '#27404c',
                  },
                flowhite: '#fafaff',
                floblack: '#3a2e39'
            },
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [
        require('@tailwindcss/custom-forms'),
        require('@tailwindcss/ui')
    ],
};
