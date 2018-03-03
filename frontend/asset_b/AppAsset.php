<?php

namespace frontend\asset_b;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';
    public $sourcePath = '@frontend_theme';
    
    public $css = [
        "css/bootstrap.css",
        "css/easy-responsive-tabs.css",
        "css/style.css",
        "css/jquery-ui.css",
        "css/gallery.css",
        "//fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900",
        "//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i",
        "css/font-awesome.css",
        "css/custom.css",
        "https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css",
    ];
    public $js = [
        // "js/jquery-1.11.1.min.js",
        "js/bootstrap.js",
        "js/modernizr.custom.js",
        "js/modernizr.custom.79639.js",
        "js/move-top.js",
        "js/easing.js",
        "js/main.js",
        "js/responsiveslides.js",
        "js/jarallax.js",
        "js/SmoothScroll.min.js",
        "js/move-top.js",
        "js/easing.js",
        "js/jquery-ui.js",
        "js/imagesloaded.pkgd.min.js",
        "js/masonry.pkgd.min.js",
        "js/classie.js",
        "js/cbpGridGallery.js",
        "https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
