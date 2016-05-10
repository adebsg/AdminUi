<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Category;

/* @var $this yii\web\View */
/* @var $model backend\models\Loc_here_detail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loc-here-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'id_category')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'id_category')->dropDownList(
        ArrayHelper::map(Category::find()->all(),'id_category', 'category_name'),
        ['prompt'=>'Pilih Category Name'])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-primary', 'name' => 'reset-button']) ?>
        <?= Html::a('Cancel', ['/loc_here_detail/index'], ['class'=>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
