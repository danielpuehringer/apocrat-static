module.exports = {
    future: {
        purgeLayersByDefault: true,
    },
    purge: {
        enabled: true,
        content: [
            './**/*.html',
            './**/*.php',
        ],
    },
    theme: {
        extend: {}
    },
    variants: {},
    plugins: []
}