<?php
namespace dmstr\web;

use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@bower/admin-lte/';
    public $css = [
        'css/AdminLTE.css',
        'css/skins/_all-skins.css'
    ];
    public $js = [
        //'js/AdminLTE/app.js'
    ];
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
