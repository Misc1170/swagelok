let mix = require('laravel-mix');
require('mix-tailwindcss');

mix.sass('assets/resources/styles/scss/style.scss', 'public/css').tailwind();
mix.js([
    'assets/resources/js/main.js',
    'assets/resources/js/offer_form.js',
    'assets/resources/js/pagination.js'
], 'public/js');