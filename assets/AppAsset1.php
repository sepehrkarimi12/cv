<?php
namespace app\assets;

use yii\web\AssetBundle;

class AppAsset1 extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900',
        'panel/css/open-iconic-bootstrap.min.css',
        'panel/css/animate.css',
        'panel/css/owl.carousel.min.css',
        'panel/css/owl.theme.default.min.css',
        'panel/css/magnific-popup.css',
        'panel/css/aos.css',
        'panel/css/ionicons.min.css',
        'panel/css/flaticon.css',
        'panel/css/icomoon.css',
        'panel/css/style.css',        
    ];
    public $js = [
        'panel/js/jquery.min.js',
        'panel/js/jquery-migrate-3.0.1.min.js',
        'panel/js/popper.min.js',
        'panel/js/bootstrap.min.js',
        'panel/js/jquery.easing.1.3.js',
        'panel/js/jquery.waypoints.min.js',
        'panel/js/jquery.stellar.min.js',
        'panel/js/owl.carousel.min.js',
        'panel/js/jquery.magnific-popup.min.js',
        'panel/js/aos.js',
        'panel/js/jquery.animateNumber.min.js',
        'panel/js/scrollax.min.js',
        'panel/js/main.js',        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
