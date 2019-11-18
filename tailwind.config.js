module.exports = {
    variants: {
    },
    theme: {
        pagination: theme => ({
            // Costumize the color only. (optional)
            color: theme('colors.yellow.600'),
        })
    },
    plugins: [
        require('tailwindcss-plugins/pagination')
    ]
};
