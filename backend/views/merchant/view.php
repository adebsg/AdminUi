<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Merchant */

$this->title = $model->id_merchant;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Merchants'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="merchant-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_merchant], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Cancel', ['/merchant/index'], ['class'=>'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_merchant], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_merchant',
            'merchant_name',
        ],
    ]) ?>

</div>
