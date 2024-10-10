<?php
namespace guiparmezani\adminlte3\assets;

use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/guiparmezani/adminlte/dist';

    public $css = [
        'css/adminlte.min.css'
    ];

    public $js = [
        'js/adminlte.min.js'
    ];

    public $depends = [
        'guiparmezani\adminlte3\assets\BaseAsset',
        'guiparmezani\adminlte3\assets\PluginAsset'
    ];
}