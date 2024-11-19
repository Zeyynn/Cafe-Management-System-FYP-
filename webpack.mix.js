const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')    // Example of processing JavaScript
   .css('resources/css/HomePage.css', 'public/css');  // Compile your HomePage.css file

   const mix = require('laravel-mix');

   mix.css('resources/css/HomePage.css', 'public/css');
   