<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class SublimeAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/sublime';
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';
    public $images = '@web/sublime/images';
    public $css = [
        "styles/bootstrap4/bootstrap.min.css",
        "plugins/font-awesome-4.7.0/css/font-awesome.min.css",
        "plugins/OwlCarousel2-2.2.1/owl.carousel.css",
        "plugins/OwlCarousel2-2.2.1/owl.theme.default.css",
        "plugins/OwlCarousel2-2.2.1/animate.css",
        "styles/main_styles.css",
        "styles/responsive.css"
    ];
    public $js = [
        "js/jquery-3.2.1.min.js",
        "styles/bootstrap4/popper.js",
        "styles/bootstrap4/bootstrap.min.js",
        "plugins/greensock/TweenMax.min.js",
        "plugins/greensock/TimelineMax.min.js",
        "plugins/scrollmagic/ScrollMagic.min.js",
        "plugins/greensock/animation.gsap.min.js",
        "plugins/greensock/ScrollToPlugin.min.js",
        "plugins/OwlCarousel2-2.2.1/owl.carousel.js",
        "plugins/Isotope/isotope.pkgd.min.js",
        "plugins/easing/easing.js",
        "plugins/parallax-js-master/parallax.min.js",
        "js/custom.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
