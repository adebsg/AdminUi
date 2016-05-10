<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Location;
use backend\models\Category;
use backend\models\Loc_here;

/* @var $this yii\web\View */
/* @var $model backend\models\Location */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="location-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'location_name')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'location_name')->dropDownList(
        ArrayHelper::map(Location::find()->all(),'id_location', 'location_name'),
        ['prompt'=>'Pilih Location Name'])?>

    <!--<?= $form->field($model, 'location_address')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'location_address')->dropDownList(
        ArrayHelper::map(Location::find()->all(),'id_location', 'location_address'),
        ['prompt'=>'Pilih Location Address'])?>

    <!--<?= $form->field($model, 'latitude')->textInput() ?>-->
    <?= $form->field($model, 'latitude')->dropDownList(
        ArrayHelper::map(Location::find()->all(),'id_location', 'latitude'),
        ['prompt'=>'Pilih Latitude'])?>

    <!--<?= $form->field($model, 'longitude')->textInput() ?>-->
    <?= $form->field($model, 'longitude')->dropDownList(
        ArrayHelper::map(Location::find()->all(),'id_location', 'longitude'),
        ['prompt'=>'Pilih Longitude'])?>

    <!--<?= $form->field($model, 'category_id')->textInput() ?>-->
    <?= $form->field($model, 'category_id')->dropDownList(
        ArrayHelper::map(Category::find()->all(),'id_category', 'category_name'),
        ['prompt'=>'Pilih Category Name'])?>

    <!--<?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'phone')->dropDownList(
        ArrayHelper::map(Location::find()->all(),'id_location', 'phone'),
        ['prompt'=>'Pilih Phone'])?>

    <!--<?= $form->field($model, 'isPromo')->textInput() ?>-->
    <?= $form->field($model, 'isPromo')->dropDownList(
        ArrayHelper::map(Location::find()->all(),'id_location', 'isPromo'),
        ['prompt'=>'Pilih Promo'])?>

    <!--<?= $form->field($model, 'photo')->textInput() ?>-->
    <?= $form->field($model, 'photo')->dropDownList(
        ArrayHelper::map(Location::find()->all(),'id_location', 'photo'),
        ['prompt'=>'Pilih Photo'])?>

    <!--<?= $form->field($model, 'id_location_here')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'id_location_here')->dropDownList(
        ArrayHelper::map(Loc_here::find()->all(),'id', 'title'),
        ['prompt'=>'Pilih Title'])?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_tag')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-primary', 'name' => 'reset-button']) ?>
        <?= Html::a('Cancel', ['/location/index'], ['class'=>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
