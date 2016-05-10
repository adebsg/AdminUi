<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Category;
use backend\models\Cat_here;

/* @var $this yii\web\View */
/* @var $model backend\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'category_name')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'category_name')->dropDownList(
        ArrayHelper::map(Category::find()->all(),'id_category', 'category_name'),
        ['prompt'=>'Pilih Category Name'])?>

    <!--<?= $form->field($model, 'parent')->textInput(['maxlength' => true]) ?>-->

    <!--<?= $form->field($model, 'id_cat_here')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'id_cat_here')->dropDownList(
        ArrayHelper::map(Cat_here::find()->all(),'id', 'title'),
        ['prompt'=>'Pilih Title'])?>

    <?= $form->field($model, 'icon')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-primary', 'name' => 'reset-button']) ?>
        <?= Html::a('Cancel', ['/category/index'], ['class'=>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
