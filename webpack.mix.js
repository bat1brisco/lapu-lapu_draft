let mix = require('laravel-mix');

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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');
   
   const tailwindcss = require('tailwindcss')
   mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .options({
      processCssUrls: false,
      postCss: [ tailwindcss('tailwind.config.js') ],
})
.copy('node_modules/font-awesome/fonts', 'public/fonts')

mix.js('resources/assets/js/auth.js', 'public/js')
   .sass('resources/assets/sass/auth.scss', 'public/css');
mix.js('resources/assets/js/sb-admin-2.js', 'public/js')
   .sass('resources/assets/sass/sb-admin-2.scss', 'public/css');
mix.extract([
    'jquery', 'raphael',
//    'datatables.net', 'datatables.net-bs', 'datatables.net-responsive', 'datatables.net-responsive-bs',
    'vue', 'axios'
], 'public/js/vendor.js');
mix.version();
