<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class SellingAsset extends AssetBundle
{
    public $sourcePath = '@web/themes/selling/';
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $images = '@web/themes/selling/images/';
    public $css = [
        "https://fonts.googleapis.com/css?family=Muli:300,400,700,900",
        "themes/selling/fonts/icomoon/style.css",

        "themes/selling/css/bootstrap.min.css",
        "themes/selling/css/jquery-ui.css",
        "themes/selling/css/owl.carousel.min.css",
        "themes/selling/css/owl.theme.default.min.css",
        "themes/selling/css/owl.theme.default.min.css",

        "themes/selling/css/jquery.fancybox.min.css",

        "themes/selling/css/bootstrap-datepicker.css",

        "themes/selling/fonts/flaticon/font/flaticon.css",

        "themes/selling/css/aos.css",

        "themes/selling/css/style.css",
    ];
    public $js = [
        "themes/selling/js/jquery-3.3.1.min.js",
        "themes/selling/js/jquery-migrate-3.0.1.min.js",
        "themes/selling/js/jquery-ui.js",
        "themes/selling/js/popper.min.js",
        "themes/selling/js/bootstrap.min.js",
        "themes/selling/js/owl.carousel.min.js",
        "themes/selling/js/jquery.stellar.min.js",
        "themes/selling/js/jquery.countdown.min.js",
        "themes/selling/js/bootstrap-datepicker.min.js",
        "themes/selling/js/jquery.easing.1.3.js",
        "themes/selling/js/aos.js",
        "themes/selling/js/jquery.fancybox.min.js",
        "themes/selling/js/jquery.sticky.js",
        "themes/selling/js/main.js",
    ];


    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
