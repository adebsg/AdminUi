<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Loc_here;

/* @var $this yii\web\View */
/* @var $model backend\models\Loc_here */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loc-here-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>-->

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <!--<?= $form->field($model, 'title')->dropDownList(
        ArrayHelper::map(Loc_here::find()->all(),'id', 'title'),
        ['prompt'=>'Pilih Title'])?>-->

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>
    <!--<?= $form->field($model, 'position')->dropDownList(
        ArrayHelper::map(Loc_here::find()->all(),'id', 'title'),
        ['prompt'=>'Pilih Position'])?>-->

    <?= $form->field($model, 'vicinity')->textInput(['maxlength' => true]) ?>
    <!--<?= $form->field($model, 'vicinity')->dropDownList(
        ArrayHelper::map(Loc_here::find()->all(),'id', 'title'),
        ['prompt'=>'Pilih Vicinity'])?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-primary', 'name' => 'reset-button']) ?>
        <?= Html::a('Cancel', ['/loc_here/index'], ['class'=>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
