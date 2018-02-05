<?php

namespace bl\preorder\backend\controllers;

use bl\preorder\common\models\Preorder;
use yii\web\Controller;
use yii\data\ActiveDataProvider;

class DefaultController extends Controller
{
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