module.exports = {
    future: {
        purgeLayersByDefault: true,
    },
    purge: {
        enabled: true,
        content: [
            './**/*.html',
            './**/*.php',
            './**/*.inc',
        ],
    },
    theme: {
        extend: {},
        colors: {
            yellow: '#F7B633',
            blue: {
                '300': '#0099CC',//apocrat
                '500': '#005E7D',//apocrat
                '700': '#003B4D',//apocrat
            },
            gray: {
                '100': '#f5f5f5',
                '200': '#eeeeee',
                '300': '#e0e0e0',
                '400': '#B4B5B5',//apocrat
                '500': '#9e9e9e',
                '600': '#757575',
                '700': '#616161',
                '800': '#424242',
                '900': '#212121',
            },
        }

    },
    variants: {},
    plugins: []
}