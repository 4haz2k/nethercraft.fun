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

mix.postCss('resources/css/layout.css', 'public/css');
mix.postCss('resources/css/homepage.css', 'public/css');
mix.js('resources/js/mainpage.js', 'public/js');
mix.copy('resources/fonts/Rubik-Italic-VariableFont_wght.ttf', 'public/fonts');
mix.copy('resources/fonts/Rubik-VariableFont_wght.ttf', 'public/fonts');
mix.copy('node_modules/mdbootstrap/js/popper.js','public/js')
    .copy('node_modules/mdbootstrap/js/bootstrap.js','public/js')
    .copy('node_modules/mdbootstrap/js/mdb.js','public/js')
    .copy('node_modules/mdbootstrap/js/jquery.min.js', 'public/js')
    .copy('node_modules/mdbootstrap/css/bootstrap.min.css', 'public/css')
    .copy('node_modules/mdbootstrap/css/mdb.min.css', 'public/css')
    .copy('node_modules/mdbootstrap/css/style.css', 'public/css')
    .js('resources/js/particles.js', 'public/js');
