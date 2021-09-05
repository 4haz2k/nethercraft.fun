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

mix.postCss('resources/css/layout.css', 'public/css')
    .postCss('resources/css/homepage.css', 'public/css')
    .postCss('resources/css/errors_style.css', 'public/css')
    .postCss('resources/css/shop/shop.css', 'public/css/shop');

mix.js('resources/js/mainpage.js', 'public/js')
    .js('resources/js/particles.js', 'public/js');

mix.copy('resources/fonts/Rubik-Italic-VariableFont_wght.ttf', 'public/fonts')
    .copy('resources/fonts/Rubik-VariableFont_wght.ttf', 'public/fonts')
    .copy('node_modules/mdbootstrap/js/popper.js','public/js')
    .copy('node_modules/mdbootstrap/js/bootstrap.js','public/js')
    .copy('node_modules/mdbootstrap/js/mdb.js','public/js')
    .copy('node_modules/mdbootstrap/js/jquery.min.js', 'public/js')
    .copy('node_modules/mdbootstrap/css/bootstrap.min.css', 'public/css')
    .copy('node_modules/mdbootstrap/css/mdb.min.css', 'public/css')
    .copy('node_modules/mdbootstrap/css/style.css', 'public/css')

