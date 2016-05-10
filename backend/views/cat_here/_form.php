<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Cat_here;

/* @var $this yii\web\View */
/* @var $model backend\models\Cat_here */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cat-here-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>-->

    <!--<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'title')->dropDownList(
        ArrayHelper::map(Cat_here::find()->all(),'id', 'title'),
        ['prompt'=>'Pilih Title'])?>

    <?= $form->field($model, 'icon')->textarea(['rows' => 6]) ?>

    <!--<?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'type')->dropDownList(
        ArrayHelper::map(Cat_here::find()->all(),'id', 'title'),
        ['prompt'=>'Pilih Type'])?>

    <?= $form->field($model, 'href')->textarea(['rows' => 6]) ?>

    <!--<?= $form->field($model, 'system')->textInput(['maxlength' => true]) ?>-->

    <!--<?= $form->field($model, 'within')->textarea(['rows' => 6]) ?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-primary', 'name' => 'reset-button']) ?>
        <?= Html::a('Cancel', ['/cat_here/index'], ['class'=>'btn btn-primary']) ?>
        
    </div>

    <?php ActiveForm::end(); ?>

</div>
