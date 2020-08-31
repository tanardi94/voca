<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class WatchAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/watch';
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';
    public $images = '@web/watch/images';
    public $css = [
        "css/linearicons.css",
        "css/font-awesome.min.css",
        "css/bootstrap.css",
        "css/magnific-popup.css",
        "css/nice-select.css",
        "css/animate.min.css",
        "css/owl.carousel.css",
        "css/main.css",
    ];
    public $js = [
        "js/vendor/jquery-2.2.4.min.js",
        "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js",
        "js/vendor/bootstrap.min.js",
        "https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA",
        "js/easing.min.js",
        "js/hoverIntent.js",
        "js/superfish.min.js",
        "js/jquery.ajaxchimp.min.js",
        "js/jquery.magnific-popup.min.js",
        "js/owl.carousel.min.js",
        "js/jquery.sticky.js",
        "js/jquery.nice-select.min.js",
        "js/parallax.min.js",
        "js/mail-script.js",
        "js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
