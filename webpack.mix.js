// webpack.mix.js

let mix = require('laravel-mix');

mix.sass('resources/scss/style.scss', 'public/css/style.css')
    .options({
        processCssUrls: false
    });
