<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Customer;
use backend\models\Cat_here;
use backend\models\Profile;

/* @var $this yii\web\View */
/* @var $model backend\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
    <!--<?= $form->field($model, 'username')->dropDownList(
        ArrayHelper::map(Customer::find()->all(),'id', 'username'),
        ['prompt'=>'Pilih Name'])?>-->

    <!--<?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>-->

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <!--<?= $form->field($model, 'email')->dropDownList(
        ArrayHelper::map(Customer::find()->all(),'id', 'email'),
        ['prompt'=>'Pilih Email'])?>-->

    <!--<?= $form->field($model, 'facebook_id')->textInput(['maxlength' => true]) ?>-->

    <!--<?= $form->field($model, 'id_profile')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'id_profile')->dropDownList(
        ArrayHelper::map(Profile::find()->all(),'id', 'radius'),
        ['prompt'=>'Pilih Radius'])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-primary', 'name' => 'reset-button']) ?>
        <?= Html::a('Cancel', ['/customer/index'], ['class'=>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
