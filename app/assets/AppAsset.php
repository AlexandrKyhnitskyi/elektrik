<?php

namespace app\assets;

class AppAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@app/media';

    public $css = [
        'css/main.css',
        'css/style.css',
    ];

    public $js = [
        'js/dm-modal.js',
        'js/valid.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
