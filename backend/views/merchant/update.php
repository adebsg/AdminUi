<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Merchant */

$this->title = 'Update Merchant: ' . ' ' . $model->id_merchant;
$this->params['breadcrumbs'][] = ['label' => 'Merchants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_merchant, 'url' => ['view', 'id' => $model->id_merchant]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="merchant-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
