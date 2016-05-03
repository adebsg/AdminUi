<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Loc_here */

$this->title = Yii::t('app', 'Create Loc Here');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Loc Heres'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loc-here-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
