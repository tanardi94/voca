<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class WatchAsset extends AssetBundle
{
    public $sourcePath = '@web/themes/watch';
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $images = '@web/watch/images';
    public $css = [
        "themes/watch/css/linearicons.css",
        "themes/watch/css/font-awesome.min.css",
        "themes/watch/css/bootstrap.css",
        "themes/watch/css/magnific-popup.css",
        "themes/watch/css/nice-select.css",
        "themes/watch/css/animate.min.css",
        "themes/watch/css/owl.carousel.css",
        "themes/watch/css/main.css",
    ];
    public $js = [
        "themes/watch/js/vendor/jquery-2.2.4.min.js",
        "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js",
        "themes/watch/js/vendor/bootstrap.min.js",
        "https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA",
        "themes/watch/js/easing.min.js",
        "themes/watch/js/hoverIntent.js",
        "themes/watch/js/superfish.min.js",
        "themes/watch/js/jquery.ajaxchimp.min.js",
        "themes/watch/js/jquery.magnific-popup.min.js",
        "themes/watch/js/owl.carousel.min.js",
        "themes/watch/js/jquery.sticky.js",
        "themes/watch/js/jquery.nice-select.min.js",
        "themes/watch/js/parallax.min.js",
        "themes/watch/js/mail-script.js",
        "themes/watch/js/main.js",
    ];
    // public $depends = [
    //     'yii\web\YiiAsset',
    //     'yii\bootstrap4\BootstrapAsset',
    // ];
}
