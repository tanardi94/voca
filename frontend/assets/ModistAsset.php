<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ModistAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/modist';
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';
    public $images = '@web/modist/images';
    public $css = [
        "css/icomoon.css",
        "css/style.css",
        "https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900",
        "https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700",
        "css/open-iconic-bootstrap.min.css",
        "css/owl.carousel.min.css",
        "css/owl.theme.default.min.css",
        "css/flaticon.css",
        "css/bootstrap-datepicker.css",
        "css/jquery.timepicker.css",
        "css/aos.css",
        "css/ionicons.min.css",
        "css/animate.css",
        "css/magnific-popup.css"
    ];
    public $js = [
        "js/aos.js",
        "js/scrollax.min.js",
        "js/main.js",
        "js/popper.min.js",
        "js/jquery.easing.1.3.js",
        "js/jquery.waypoints.min.js",
        "js/jquery.stellar.min.js",
        "js/owl.carousel.min.js",
        "js/jquery.magnific-popup.min.js",
        "js/jquery.animateNumber.min.js",
        "js/bootstrap-datepicker.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
