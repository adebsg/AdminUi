<?php

use yii\helpers\Html;
use backend\models\Profile;
use backend\models\Category;
use backend\models\Profile_tag;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Profile_tag */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-tag-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'id_profile')->textInput() ?>-->
    <?= $form->field($model, 'id_profile')->dropDownList(
        ArrayHelper::map(Profile::find()->all(),'id', 'radius'),
        ['prompt'=>'Pilih Radius'])?>

    <!--<?= $form->field($model, 'id_category')->textInput() ?>-->
    <?= $form->field($model, 'id_category')->dropDownList(
        ArrayHelper::map(Category::find()->all(),'id_category', 'category_name'),
        ['prompt'=>'Pilih Category Name'])?>

    <!--<?= $form->field($model, 'detail_tag')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'detail_tag')->dropDownList(
        ArrayHelper::map(Profile_tag::find()->all(),'id', 'detail_tag'),
        ['prompt'=>'Detail Tag'])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-primary', 'name' => 'reset-button']) ?>
        <?= Html::a('Cancel', ['/profile_tag/index'], ['class'=>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
