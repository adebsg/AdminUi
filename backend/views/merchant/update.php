<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Merchant */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Merchant',
]) . ' ' . $model->id_merchant;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Merchants'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_merchant, 'url' => ['view', 'id' => $model->id_merchant]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="merchant-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
