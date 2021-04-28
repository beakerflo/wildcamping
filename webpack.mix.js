const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .copy('node_modules/leaflet/dist/leaflet.css', 'public/leaflet/leaflet.css')
    .copy('node_modules/leaflet/dist/leaflet.js', 'public/leaflet/leaflet.js')
    .copy('node_modules/leaflet/dist/leaflet.js.map', 'public/leaflet/leaflet.js.map')
    .copyDirectory('node_modules/leaflet/dist/images', 'public/leaflet/images')
    .webpackConfig(require('./webpack.config'));
