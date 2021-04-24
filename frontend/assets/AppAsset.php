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
        // 'css/site.css',
        'FlexStart/assets/vendor/bootstrap/css/bootstrap.min.css',
        'FlexStart/assets/vendor/bootstrap-icons/bootstrap-icons.css',
        'FlexStart/assets/vendor/aos/aos.css',
        'FlexStart/assets/vendor/remixicon/remixicon.css',
        'FlexStart/assets/vendor/swiper/swiper-bundle.min.css',
        'FlexStart/assets/vendor/glightbox/css/glightbox.min.css',
        'FlexStart/assets/css/style.css'
    ];
    public $js = [
        "FlexStart/assets/vendor/bootstrap/js/bootstrap.bundle.js",
        "FlexStart/assets/vendor/aos/aos.js",
        "FlexStart/assets/vendor/php-email-form/validate.js",
        "FlexStart/assets/vendor/swiper/swiper-bundle.min.js",
        "FlexStart/assets/vendor/purecounter/purecounter.js",
        "FlexStart/assets/vendor/isotope-layout/isotope.pkgd.min.js",
        "FlexStart/assets/vendor/glightbox/js/glightbox.min.js",
        "FlexStart/assets/js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
