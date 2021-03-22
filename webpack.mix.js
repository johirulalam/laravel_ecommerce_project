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

mix.js('resources/assets/js/app.js', 'public/js')
     .js('resources/assets/js/bootstrap.js', 'public/js')
    .postCss('resources/assets/css/app.css', 'public/css', [
        require("tailwindcss"),
    ])
    .version();

mix.styles([
	'resources/assets/css/frontapp.css',
	'resources/assets/css/utility.css',
	'resources/assets/css/vendor.css',
	], 'public/css/frontapp.css').version();




// mix.sass('resources/assets/sass/app.scss', 'sass/app.scss')
//      .sass('resources/assets/sass/utility.scss', 'sass/app.scss').version();

 mix.autoload({
           jquery: ['$', 'jQuery', 'window.jQuery']
    })
  .scripts([
	'resources/assets/js/frontapp.js',
	'resources/assets/js/jquery.shopnav.js',
	'resources/assets/js/vendor.js',
	], 'public/js/frontapp.js').version();