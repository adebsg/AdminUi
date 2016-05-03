<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Profile_tag */

$this->title = Yii::t('app', 'Create Profile Tag');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Profile Tags'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-tag-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
