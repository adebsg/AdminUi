<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MerchantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Merchants';
//$this->params['breadcrumbs'][] = $this->title;
?>
<!--
<div class="container">
<ul class="breadcrumb">
<li>
<a href="/adminUi/backend/web/index.php?r=site%2Findex">Home</a></li>
<a href="/adminUi/backend/web/index.php?r=location%2Findex">Location</a>
<a href="/adminUi/backend/web/index.php?r=merchant%2Findex">Merchant</a>
<a href="/adminUi/backend/web/index.php?r=tag%2Findex">Tag</a>
<a href="/adminUi/backend/web/index.php?r=category%2Findex">Category</a>
</ul>
</div>
-->
<div class="merchant-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Merchant', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_merchant',
            'merchant_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
