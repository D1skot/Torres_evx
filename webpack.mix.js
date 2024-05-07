const mix = require('laravel-mix');
const path = require('path')
const argv = require('minimist')(process.argv.slice(2));
const TerserPlugin = require("terser-webpack-plugin");
const autoprefixer = require('autoprefixer')
const webpack = require('webpack');



mix.webpackConfig({
    plugins: [
        new webpack.ProvidePlugin({
            '$': 'jquery',
            'jQuery': 'jquery',
            'window.jQuery': 'jquery',
        }),
    ],
    stats: {
        children: true
    }
});

const src = {
    user: {
        js: 'resources/js/app.js',
        sass: 'resources/sass/app.scss'
    }
}

const dest = {
    js: 'public/js',
    sass: 'public/css'
}

module.exports = {
    optimization: {
        minimize: true,
        minimizer: [new TerserPlugin()],
    },
    entry: './src/js/main.js',
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'dist')
    },
    devServer: {
        static: path.resolve(__dirname, 'dist'),
        port: 8080,
        hot: true
    }
}

mix.js(src.user.js, dest.js)
        .sass(src.user.sass, dest.sass)
     