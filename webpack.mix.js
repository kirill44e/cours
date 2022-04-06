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

mix.js('resources/js/courses.js', 'public/js')
  .js('resources/js/jquery-3.6.0.min.js', 'public/js')
  .js('resources/js/script.js', 'public/js')
    .postCss('resources/css/reviews.css', 'public/css')
    .postCss('resources/css/courses.css', 'public/css')
    .postCss('resources/css/style.css', 'public/css');
