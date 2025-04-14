let mix = require('laravel-mix');
const path = require("path");

mix.webpackConfig({
    externals: {
        jquery: "jQuery",
        bootstrap: true,
        vue: "Vue",
        moment: "moment",
    }
});

mix.setResourceRoot('./');
mix.setPublicPath('../');

mix
    .sass('assets/_responsive-spacings.scss', '../css/responsive-spacings.css', {
        sassOptions: {
            includePaths: [
                path.resolve(__dirname, './node_modules/')
            ]
        }
    })