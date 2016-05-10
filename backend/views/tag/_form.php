<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use backend\models\Tag;
use backend\models\Category;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tag */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tag-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'tag_name')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'tag_name')->dropDownList(
        ArrayHelper::map(Tag::find()->all(),'id', 'tag_name'),
        ['prompt'=>'Pilih Tag Name'])?>

    <!--<?= $form->field($model, 'id_category')->textInput() ?>-->
    <?= $form->field($model, 'id_category')->dropDownList(
        ArrayHelper::map(Category::find()->all(),'id_category', 'category_name'),
        ['prompt'=>'Pilih Category Name'])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-primary', 'name' => 'reset-button']) ?>
        <?= Html::a('Cancel', ['/tag/index'], ['class'=>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
