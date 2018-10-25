let mix = require('laravel-mix');
let build = require('./tasks/build.js');

let ImageminPlugin = require('imagemin-webpack-plugin').default;
let CopyWebpackPlugin = require('copy-webpack-plugin');
let imageminMozjpeg = require('imagemin-mozjpeg');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', 'source/**/*.js']),
        new CopyWebpackPlugin([{
            from: 'source/_assets/images',
            to: 'images', // Laravel mix will place this in 'assets/images'
        }]),
        new ImageminPlugin({
            test: /\.(jpe?g|png|gif|svg)$/i,
            plugins: [
                imageminMozjpeg({
                    quality: 80,
                })
            ]
        }),
    ]
});

mix.js(['source/_assets/js/main.js', 'node_modules/bootstrap/dist/js/bootstrap.js'], 'js')
    .sass('source/_assets/sass/main.scss', 'css/main.css')
    .version();
