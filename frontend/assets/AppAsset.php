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
        'css/site.css',
        'css/style.css',
        'css/responsive.css',
        'revolution/css/layers.css',
        'revolution/css/settings.css',
        'css/animate.css'
    ];
    public $js = [
        'js/jquery.min.js',
        'js/jquery.easing.js',
        'js/jquery-waypoints.js',
        'js/jquery.cookie.js',
        'js/jquery.fitvids.js',
        'js/parallax.js',
        'js/jquery.magnific-popup.min.js',
        'js/jquery.flexslider-min.js',
        'js/main.js',
        'js/theia-sticky-sidebar.min.js',
        'revolution/js/jquery.themepunch.tools.min.js',
        'revolution/js/jquery.themepunch.revolution.min.js',
        'revolution/js/slider_v1.js',
        'revolution/js/extensions/revolution.extension.actions.min.js',
        'revolution/js/extensions/revolution.extension.carousel.min.js',
        'revolution/js/extensions/revolution.extension.kenburn.min.js',
        'revolution/js/extensions/revolution.extension.layeranimation.min.js',
        'revolution/js/extensions/revolution.extension.migration.min.js',
        'revolution/js/extensions/revolution.extension.navigation.min.js',
        'revolution/js/extensions/revolution.extension.parallax.min.js',
        'revolution/js/extensions/revolution.extension.slideanims.min.js',
        'revolution/js/extensions/revolution.extension.video.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
