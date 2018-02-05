<?php

namespace bl\preorder\frontend\controllers;

use Yii;
use bl\preorder\common\models\Preorder;

use yii\web\Controller;

class OrderController extends Controller
{
    public function actionAddOrder() {
        $model = new Preorder();
        if($model->load(Yii::$app->request->post()) && $model->save()){
            $message = Yii::$app->mailer->compose();
            if (Yii::$app->user->isGuest) {
                $message->setFrom('no-reply@cartaterra.local');
            } else {
                $message->setFrom(Yii::$app->user->identity->email);
            }
            $message->setTo(Yii::$app->params['adminEmail'])
                ->setSubject('Заказ товара')
                ->setTextBody('Заказ товара ' . $model->description . ' от ' . $model->phone_number)
                ->send();
           Yii::$app->session->setFlash('confirmed');
          $model->refresh();
        }
    }
}