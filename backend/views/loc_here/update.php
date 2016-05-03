<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Loc_here */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Loc Here',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Loc Heres'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="loc-here-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
