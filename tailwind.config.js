/** @type {import("tailwindcss").Config} */
module.exports = {
    content: ["./resources/**/*.{html,js,vue}"],
    theme: {
        extend: {
            colors: colors => ({
                ...colors,
                s: "#93287d",
                p: "#4c0051"
            })
        }
    },
    plugins: []
};
