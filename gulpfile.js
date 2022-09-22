var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    // mix.sass('app.scss');
    mix.styles(['main.css']);

    mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/libs/jquery/jquery.min.js');
    // mix.copy('node_modules/jquery/dist/jquery.min.map.js', 'resources/assets/js/libs/jquery/jquery.min.map.js');
    mix.scripts([
        'app.js',
        'admin.js'
    ], 'public/js/app.js');

    mix.version('public/js/app.js');
});
