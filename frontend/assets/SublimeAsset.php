<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class SublimeAsset extends AssetBundle
{
    public $sourcePath = '@web/themes/sublime';
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $images = '@web/sublime/images';
    public $css = [
        "themes/sublime/styles/bootstrap4/bootstrap.min.css",
        "themes/sublime/plugins/font-awesome-4.7.0/css/font-awesome.min.css",
        "themes/sublime/plugins/OwlCarousel2-2.2.1/owl.carousel.css",
        "themes/sublime/plugins/OwlCarousel2-2.2.1/owl.theme.default.css",
        "themes/sublime/plugins/OwlCarousel2-2.2.1/animate.css",
        "themes/sublime/styles/main_styles.css",
        "themes/sublime/styles/responsive.css"
    ];
    public $js = [
        "themes/sublime/js/jquery-3.2.1.min.js",
        "themes/sublime/styles/bootstrap4/popper.js",
        "themes/sublime/styles/bootstrap4/bootstrap.min.js",
        "themes/sublime/plugins/greensock/TweenMax.min.js",
        "themes/sublime/plugins/greensock/TimelineMax.min.js",
        "themes/sublime/plugins/scrollmagic/ScrollMagic.min.js",
        "themes/sublime/plugins/greensock/animation.gsap.min.js",
        "themes/sublime/plugins/greensock/ScrollToPlugin.min.js",
        "themes/sublime/plugins/OwlCarousel2-2.2.1/owl.carousel.js",
        "themes/sublime/plugins/Isotope/isotope.pkgd.min.js",
        "themes/sublime/plugins/easing/easing.js",
        "themes/sublime/plugins/parallax-js-master/parallax.min.js",
        "themes/sublime/js/custom.js"
    ];
    // public $depends = [
    //     'yii\web\YiiAsset',
    //     'yii\bootstrap4\BootstrapAsset',
    // ];
}
