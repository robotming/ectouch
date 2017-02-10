<?php

namespace app\assets;

use yii\web\AssetBundle;

class AuthAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'static/admin/css/app.css',
    ];
    public $js = [
        'static/admin/js/app.js',
    ];
}
