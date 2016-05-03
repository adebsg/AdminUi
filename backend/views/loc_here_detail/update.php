<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Loc_here_detail */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Loc Here Detail',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Loc Here Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="loc-here-detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
