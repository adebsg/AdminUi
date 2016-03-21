<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
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
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_category',
            'category_name',
            'category_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
