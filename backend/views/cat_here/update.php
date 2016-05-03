<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Cat_here */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Cat Here',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cat Heres'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cat-here-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
