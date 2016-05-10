<?php

use yii\helpers\Html;
use backend\models\Profile;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>-->

    <!--<?= $form->field($model, 'radius')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'radius')->dropDownList(
        ArrayHelper::map(Profile::find()->all(),'id', 'radius'),
        ['prompt'=>'Pilih Radius'])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-primary', 'name' => 'reset-button']) ?>
        <?= Html::a('Cancel', ['/profile/index'], ['class'=>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
