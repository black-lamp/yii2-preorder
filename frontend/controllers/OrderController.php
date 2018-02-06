<?php

namespace bl\preorder\frontend\controllers;

use bl\preorder\frontend\models\Order;
use Yii;
use bl\preorder\common\models\Preorder;
use yii\web\Controller;

/**
 * @author Maxim Sluysarenko <waspmax1@gmail.com>
 *
 * Class OrderController
 * @package bl\preorder\frontend\controllers
 */
class OrderController extends Controller
{
    /**
     * method called when adding a new order and triggering Order model events
     */
    public function actionAddOrder() {
        $model = new Preorder();
        $orderModel = new Order();
        if($model->load(Yii::$app->request->post()) && $model->save()){
            $orderModel->on(Order::FORM_CONFIRMED, [$orderModel, 'formConfirm']);
            $orderModel->trigger(Order::FORM_CONFIRMED);
        }
    }
}