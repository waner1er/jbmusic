const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        screens: {
            sm: '480px',
            md: '768px',
            lg: '976px',
            xl: '1440px',
        },
        "colors": {
            "primary": {
                50: "#E3EEF2",
                100: "#CBDFE7",
                200: "#93BDCD",
                300: "#5E9DB5",
                400: "#3E7388",
                500: "#264653",
                600: "#1E3842",
                700: "#162931",
                800: "#0E1B1F",
                900: "#080F11",
                950: "#030607"
            },
            "secondary": {
                50: "#E7F9F6",
                100: "#CFF2EE",
                200: "#9EE5DD",
                300: "#6AD7CA",
                400: "#3ACAB9",
                500: "#2A9D8F",
                600: "#217D72",
                700: "#195D55",
                800: "#11403B",
                900: "#09201D",
                950: "#04100F"
            },
            "third": {
                50: "#FDFAF2",
                100: "#FAF3E0",
                200: "#F6E9C5",
                300: "#F2DCA6",
                400: "#EDD087",
                500: "#E9C46A",
                600: "#E0AE2E",
                700: "#B2871A",
                800: "#785B12",
                900: "#3A2C09",
                950: "#1F1805"
            },
            "fourth": {
                50: "#FEF7F1",
                100: "#FDECDE",
                200: "#FBDBC1",
                300: "#F8C8A0",
                400: "#F6B783",
                500: "#F4A261",
                600: "#F07F24",
                700: "#BF5D0D",
                800: "#813F09",
                900: "#3E1E04",
                950: "#211002"
            },
            "fifth": {
                50: "#FDF0ED",
                100: "#FAE1DB",
                200: "#F5C4B7",
                300: "#F1AA98",
                400: "#EC8C74",
                500: "#E76F51",
                600: "#DC441E",
                700: "#A63317",
                800: "#6C210F",
                900: "#361107",
                950: "#1B0804"
            }
        },
        fontFamily: {
            sans: ['Graphik', 'sans-serif'],
            serif: ['Merriweather', 'serif'],
            'press-start': ['"play"', 'sans-serif'],

        },
        extend: {
            spacing: {
                '128': '32rem',
                '144': '36rem',
            },
            borderRadius: {
                '4xl': '2rem',
            },
            gridTemplateColumns: {
                'auto-column': 'repeat(auto-fill, minmax(400px, 1fr))',
                'fifty-fifty': 'repeat(2, minmax(0, 1fr))',
            }
        }
    },

    plugins: [
        require('flowbite/plugin')
    ],
};
