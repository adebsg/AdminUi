<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LocationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="location-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_location') ?>

    <?= $form->field($model, 'location_name') ?>

    <?= $form->field($model, 'location_address') ?>

    <?= $form->field($model, 'latitude') ?>

    <?= $form->field($model, 'longitude') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'isPromo') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'id_location_here') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'location_tag') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
