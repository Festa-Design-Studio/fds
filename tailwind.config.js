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
        fontFamily: {
            'sans': ['Inter', ...defaultTheme.fontFamily.sans],
            'Inter': ['Inter', 'sans-serif'],
        },
        
        fontWeight: {
            'thin': '100',
            'extralight': '200',
            'light': '300',
            'normal': '400',
            'medium': '500',
            'semibold': '600',
            'bold': '700',
            'extrabold': '800',
            'black': '900',
        },

        /* Festa Headline and body system */
        fontSize: {
            'display': ['clamp(3rem, 8vw, 4rem)', { lineHeight: '1.1', letterSpacing: '-0.02em' }],
            'h1': ['clamp(2.25rem, 6vw, 3rem)', { lineHeight: '1.2', letterSpacing: '-0.01em' }],
            'h2': ['clamp(1.875rem, 5vw, 2.25rem)', { lineHeight: '1.3', letterSpacing: '-0.01em' }],
            'h3': ['clamp(1.5rem, 4vw, 1.875rem)', { lineHeight: '1.4', letterSpacing: '0' }],
            'h4': ['clamp(1.25rem, 3.5vw, 1.5rem)', { lineHeight: '1.4', letterSpacing: '0' }],
            'h5': ['clamp(1.125rem, 3vw, 1.25rem)', { lineHeight: '1.5', letterSpacing: '0' }],
            'h6': ['clamp(1rem, 2.5vw, 1.125rem)', { lineHeight: '1.5', letterSpacing: '0' }],
            'body-lg': ['clamp(1rem, 2.5vw, 1.125rem)', { lineHeight: '1.7', letterSpacing: '-0.01em' }],
            'body': ['1rem', { lineHeight: '1.6', letterSpacing: '0' }],
            'body-sm': ['0.875rem', { lineHeight: '1.5', letterSpacing: '0.01em' }],
        },
      
        /* Festa Color system */
        colors: {
            'chicken-comb': {
              '50': '#fef2f2',
              '100': '#fee2e2',
              '200': '#fecaca',
              '300': '#fca5a5',
              '400': '#f87171',
              'DEFAULT': '#e12729',
              '600': '#dc2626',
              '700': '#b91c1c',
              '800': '#991b1b',
              '900': '#7f1d1d',
              '950': '#46090a',
            },
            'apocalyptic-orange': {
              '50': '#fff7ed',
              '100': '#ffedd5',
              '200': '#fed7aa',
              '300': '#fdba74',
              'DEFAULT': '#f37324',
              '500': '#f97316',
              '600': '#ea580c',
              '700': '#c2410c',
              '800': '#9a3412',
              '900': '#7c2d12',
              '950': '#431407',
            },
            'pepper-green': {
              '50': '#ecfff7',
              '100': '#d1ffe9',
              '200': '#a7ffd8',
              '300': '#6fffc1',
              '400': '#00f28b',
              'DEFAULT': '#007f4e',
              '600': '#00b369',
              '700': '#008f54',
              '800': '#007144',
              '900': '#005c38',
              '950': '#003921',
            },
            'pot-of-gold': {
              '50': '#fefce8',
              '100': '#fef9c3',
              'DEFAULT': '#f8cc1b',
              '300': '#fde047',
              '400': '#facc15',
              '500': '#eab308',
              '600': '#ca8a04',
              '700': '#a16207',
              '800': '#854d0e',
              '900': '#713f12',
              '950': '#412007',
            },
            'leaf': {
              '50': '#f3f9ec',
              '100': '#e5f2d8',
              'DEFAULT': '#72b043',
              '300': '#bcd99b',
              '400': '#a3ca78',
              '500': '#8bbb55',
              '600': '#729b45',
              '700': '#5b7c37',
              '800': '#46612b',
              '900': '#384d22',
              '950': '#16250e',
            },
            'white-smoke': {
              '50': '#ffffff',
              '100': '#fafafa',
              'DEFAULT': '#f6f6f6',
              '300': '#e5e5e5',
              '400': '#d4d4d4',
              '500': '#a3a3a3',
              '600': '#737373',
              '700': '#525252',
              '800': '#404040',
              '900': '#333333',
              '950': '#292929',
            },
            'the-end': {
              '50': '#f6f6f6',
              '100': '#e7e7e7',
              '200': '#d1d1d1',
              '300': '#b0b0b0',
              '400': '#888888',
              'DEFAULT': '#2a2a2a',
              '600': '#4d4d4d',
              '700': '#434343',
              '800': '#3f3f3f',
              '900': '#3d3d3d',
            },
        },

        extend: {
            
        },
    },

    plugins: [forms],
};
