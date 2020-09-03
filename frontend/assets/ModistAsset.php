<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ModistAsset extends AssetBundle
{
    public $sourcePath = '@web/themes/modist/';
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $images = '@web/themes/modist/images/';
    public $css = [
        "themes/modist/css/icomoon.css",
        "themes/modist/css/style.css",
        "https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900",
        "https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700",
        "themes/modist/css/open-iconic-bootstrap.min.css",
        "themes/modist/css/owl.carousel.min.css",
        "themes/modist/css/owl.theme.default.min.css",
        "themes/modist/css/flaticon.css",
        "themes/modist/css/bootstrap-datepicker.css",
        "themes/modist/css/jquery.timepicker.css",
        "themes/modist/css/aos.css",
        "themes/modist/css/ionicons.min.css",
        "themes/modist/css/animate.css",
        "themes/modist/css/magnific-popup.css"
    ];
    public $js = [
        "themes/modist/js/aos.js",
        "themes/modist/js/scrollax.min.js",
        "themes/modist/js/main.js",
        "themes/modist/js/popper.min.js",
        "themes/modist/js/jquery.easing.1.3.js",
        "themes/modist/js/jquery.waypoints.min.js",
        "themes/modist/js/jquery.stellar.min.js",
        "themes/modist/js/owl.carousel.min.js",
        "themes/modist/js/jquery.magnific-popup.min.js",
        "themes/modist/js/jquery.animateNumber.min.js",
        "themes/modist/js/bootstrap-datepicker.js"
    ];


    // public $depends = [
    //     'yii\web\YiiAsset',
    //     'yii\bootstrap\BootstrapAsset',
    // ];
}
