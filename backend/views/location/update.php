<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Location */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Location',
]) . ' ' . $model->id_location;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Locations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_location, 'url' => ['view', 'id' => $model->id_location]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="location-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
