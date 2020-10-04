module.exports = {
    future: {
        removeDeprecatedGapUtilities: true
        // purgeLayersByDefault: true
    },
    purge: {
        mode: "all",
        content: ["./resources/**/*.vue"]
    },
    theme: {
        extend: {}
    },
    variants: {},
    plugins: []
};
