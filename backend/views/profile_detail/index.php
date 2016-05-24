<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use backend\models\Category;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\Profile_detailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Profile Details');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Profile Detail'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'id_profile',
			[	
				'attribute'=>'category',				
				'value' => 'category.category_name',
			],
 	        'id_profile_tag',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
