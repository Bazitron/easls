<?php
namespace app\assets;

class AppAsset extends \yii\web\AssetBundle
{
    public $baseUrl = '@web';
    public $css = [
        'style/css/style.css',
        'style/css/jumbotron-narrow.css',
    ];
    public $js = [
        'style/js/scripts.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
