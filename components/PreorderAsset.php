<?php

namespace bl\preorder\components;

use yii\web\AssetBundle;

class PreorderAsset extends AssetBundle
{
    public $js = [
        'js/preorder-main.js',
    ];

    public $css = [
        'css/preorder-main.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }
}
