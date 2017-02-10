<?php

namespace app\assets;

use yii\web\AssetBundle;

class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'static/admin/css/dashboard.css',
    ];
    public $js = [
        'static/admin/js/dashboard.js',
    ];
}
