<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Cat_here */

$this->title = Yii::t('app', 'Create Cat Here');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cat Heres'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-here-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
