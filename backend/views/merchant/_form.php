<?php

use yii\helpers\Html;
use backend\models\Merchant;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Merchant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="merchant-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'merchant_name')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'merchant_name')->dropDownList(
        ArrayHelper::map(Merchant::find()->all(),'id_merchant', 'merchant_name'),
        ['prompt'=>'Pilih Merchant Name'])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-primary', 'name' => 'reset-button']) ?>
        <?= Html::a('Cancel', ['/merchant/index'], ['class'=>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
