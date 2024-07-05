import colors from "tailwindcss/colors.js";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/*.blade.php',
        './resources/views/**/*.blade.php',
        './resources/js/*.js',
        './resources/js/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                primary: colors.blue,
                accent: colors.indigo,
                secondary: colors.zinc,
                white: colors.white,
                black: colors.black,
                info: colors.sky,
                danger: colors.red,
                success: colors.green,
                warning: colors.amber
            }
        },
    },
    plugins: [],
}

