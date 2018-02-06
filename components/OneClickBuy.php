<?php

namespace bl\preorder\components;

use bl\preorder\common\models\Preorder;
use yii\base\Widget;

/**
 * @author Maxim Sluysarenko <waspmax1@gmail.com>
 *
 * Class OneClickBuy
 * @package bl\preorder\components
 */
class OneClickBuy extends Widget
{
    public function init()
    {
        parent::init();
        PreorderAsset::register($this->getView());
        $this->registerTranslations();
    }

    public function run()
    {
        $model = new Preorder();
        return $this->render('OneClickBuy', [
            'model' => $model
        ]);
    }

    public function registerTranslations()
    {
        if (!isset(\Yii::$app->i18n->translations['preorder'])) {
            \Yii::$app->i18n->translations['preorder'] = [
                'class'          => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'en-US',
                'basePath'       => '@vendor/black-lamp/yii2-preorder/components/messages',
            ];
        }
    }

}