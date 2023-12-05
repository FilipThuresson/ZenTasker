/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            bg: '#343a40',//'#0A0908',
            sbg: '#495057',
            primary: '#22333B',
            text: '#EAE0D5',
            stext: '#C6AC8F',
            secondary: '#5E503F',
            success: '#00C851',
            warning: '#FFBB33',
            danger: '#ff4444',
            info: '#66b5e5',
            bg_input: '#2C434D',
        },
        extend: {},
    },
    plugins: [],
}

