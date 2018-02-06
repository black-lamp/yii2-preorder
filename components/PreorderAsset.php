<?php

namespace bl\preorder\components;

use yii\web\AssetBundle;

/**
 * @author Maxim Sluysarenko <waspmax1@gmail.com>
 *
 * Class PreorderAsset
 * @package bl\preorder\components
 */
class PreorderAsset extends AssetBundle
{
    /**
     * @var array
     */
    public $js = [
        'js/preorder-main.js',
    ];

    /**
     * @var array
     */
    public $css = [
        'css/preorder-main.css',
    ];

    /**
     * @var array
     */
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
