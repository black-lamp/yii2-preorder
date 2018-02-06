<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/**
 * @author Maxim Sluysarenko <waspmax1@gmail.com>
 *
 * @var $model
 */

?>


<a class="btn btn-lg btn-success btn-i pull-right" onclick="$('#myModal').modal('show');"><?= Yii::t('preorder', 'modal title');?></a>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php $form = ActiveForm::begin([
                'action' => ['/preorder/order/add-order'],
                'id' => 'add-order-form',
                'enableAjaxValidation'=>true,
            ]); ?>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><?= Yii::t('preorder', 'modal title');?></h4>
                <p><?= Yii::t('preorder', 'modal description');?></p>
            </div>
            <div class="modal-body">
                <?= $form->field($model, 'phone_number')->textInput()->label(Yii::t('preorder', 'phone number')) ?>
                <?= $form->field($model, 'description')->hiddenInput(['value' => $this->title])->label(false) ?>
            </div>
            <div class="modal-footer">
                <?= Html::submitButton(Yii::t('preorder', 'send form'), ['class' => 'btn btn-success', 'name' => 'contact-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

<?php if (Yii::$app->session->hasFlash('confirmed')) : ?>
    <div class="clearfix"></div>
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?= Yii::t('preorder', 'form confirmed');?>
    </div>
<?php endif; ?>