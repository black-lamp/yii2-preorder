<?php

namespace bl\preorder\frontend\models;

use bl\preorder\common\models\Preorder;
use \yii\base\Model;
use Yii;

/**
 * @author Maxim Sluysarenko <waspmax1@gmail.com>
 *
 * Class Order
 * @package bl\preorder\frontend\models
 */
class Order extends Model
{
    const FORM_CONFIRMED = 'confirmed form';

    /**
     * Method called when one click buy form is confirmed
     */
    public function formConfirm()
    {
        $model = new Preorder();
        Yii::$app->session->setFlash('confirmed');
        $message = Yii::$app->mailer->compose();
        $message->setFrom('no-reply@cartaterra.local');
        $message->setTo(Yii::$app->params['adminEmail'])
            ->setSubject('Заказ товара')
            ->setTextBody('Заказ товара ' . $model->description . ' от ' . $model->phone_number)
            ->send();
        $model->refresh();
    }
}