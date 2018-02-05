<?php

namespace bl\preorder\components;

use bl\preorder\common\models\Preorder;
use yii\base\Widget;


class OneClickBuy extends Widget
{
    public function init()
    {
        parent::init();
        PreorderAsset::register($this->getView());
    }

    public function run()
    {
        $model = new Preorder();
        return $this->render('OneClickBuy', [
            'model' => $model
        ]);
    }

}