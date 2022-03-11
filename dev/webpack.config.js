const path = require('path');
const miniCss = require('mini-css-extract-plugin');
const FileManagerPlugin = require('filemanager-webpack-plugin');
const rootPath = path.join(__dirname, 'public_html');
const dist = path.join(rootPath, 'dist');
const src = path.join(rootPath, 'src');
const prod = path.join(__dirname, 'frontend', 'web');

const babelOptions = preset => {
    const opts = {
        presets: [
            '@babel/preset-env'
        ],
        plugins: [
            '@babel/plugin-proposal-class-properties'
        ]
    };

    if (preset) {
        opts.presets.push(preset)
    }

    return opts
};


const filename = (rPath, ext) => {

    const filename = `[name].${ext}`;

    return path.join(rPath,filename);

}

module.exports = {
    devServer: {
        static: path.resolve(__dirname, './dist'),
    },
    mode: 'development',
    entry: './public_html/src/index.js',
    output: {
        filename: filename('js','js'),
        path: path.join(dist)
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: [{
                    loader: 'babel-loader',
                    options: babelOptions()
                }]
            },
            {
            test: /\.(s*)css$/,
            use: [
                miniCss.loader,
                'css-loader',
                'sass-loader',
            ]
        },
        ]
    },
    plugins: [
        new miniCss({
            filename: 'style/style.css',
        }),

        new FileManagerPlugin({
            events: {
                onEnd: {
                    copy: [
                        {
                            source: path.join(dist, 'style'),
                            destination: path.join(prod, 'css', 'styles')
                        },
                    ]
                }
            }
        }),

    ],
    resolve: {
        extensions: ['.scss','.js']
    }
};