const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'js');
mix.js('resources/js/servico.js', 'js');

mix.options({
    hmrOptions: {
        host: 'localhost',
        port: 8080,
    }
})
