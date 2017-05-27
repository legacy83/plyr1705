<?php

namespace plyr1705\interfaces\assets;

use yii\web\AssetBundle;

/**
 * Class PlyrAsset
 *
 * @package plyr1705\interfaces\assets
 */
class SiteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'https://fonts.googleapis.com/css?family=Poppins:400,500,600,700',
        'http://static.npress.com.br/plyr/assets/vendor/fontawesome/css/font-awesome.min.css',
        'http://static.npress.com.br/plyr/assets/vendor/lity/lity.min.css',
        'http://static.npress.com.br/plyr/assets/css/style.css',
        'css/site.css',
    ];

    public $js = [
        'http://static.npress.com.br/plyr/assets/vendor/scrollreveal/scrollreveal.min.js',
        'http://static.npress.com.br/plyr/assets/vendor/move-to/moveTo.min.js',
        'http://static.npress.com.br/plyr/assets/vendor/parallax/parallax.min.js',
        'http://static.npress.com.br/plyr/assets/vendor/lity/lity.min.js',
        'http://static.npress.com.br/plyr/assets/vendor/match-height/jquery.matchHeight-min.js',
        'http://static.npress.com.br/plyr/assets/js/scripts.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}