<?php

namespace bl\preorder\backend\controllers;

use bl\preorder\common\models\Preorder;
use yii\web\Controller;
use yii\data\ActiveDataProvider;

/**
 * @author Maxim Sluysarenko <waspmax1@gmail.com>
 * Class DefaultController
 * @package bl\preorder\backend\controllers
 */
class DefaultController extends Controller
{
    /**
     * returns all orders info from one click buy module
     * @return string
     */
    public function actionOrders()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Preorder::find(),
            'sort'=> [
                'defaultOrder' => ['created_at' => SORT_ASC]
            ]
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

}