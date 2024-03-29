<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/styles/style.css',
        'css/bootstrap.css',
        'css/fonts.css',
        'css/site.css',
        'css/template_style.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css',
        'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css'
    ];
    public $js = [
        'https://unpkg.com/swiper@8/swiper-bundle.min.js',
        'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js',
        'js/index.js',
        'js/core.min.js',
        'js/script.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
