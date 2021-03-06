const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
// voeg scss bestand toe in je views mapje en het word gesync met webpack

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')

   .sass('resources/sass/contact.scss', 'public/css')
   .sass('resources/sass/header.scss', 'public/css')
   .sass('resources/sass/home.scss', 'public/css')
   .sass('resources/sass/loader.scss', 'public/css')
   .sass('resources/sass/work.scss', 'public/css')
   .sass('resources/sass/custom.scss', 'public/css')
   .sass('resources/sass/blog.scss', 'public/css')
   ;
