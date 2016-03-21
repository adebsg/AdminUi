<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Dheket';
?>
<!DOCTYPE html >
<html lang="<?= Yii::$app->language ?>">
<head >
    <meta charset="<?= Yii::$app->charset ?>"/>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head >
<body class="signin">
<?php $this->beginBody() ?>
 <!--   <div class="container">
<ul class="breadcrumb">
<li>
<a href="/adminUi/backend/web/index.php?r=site%2Findex">Home</a>
</li>
<a href="/adminUi/backend/web/index.php?r=location%2Findex">Location</a>
<a href="/adminUi/backend/web/index.php?r=merchant%2Findex">Merchant</a>
<a href="/adminUi/backend/web/index.php?r=tag%2Findex">Tag</a>
<a href="/adminUi/backend/web/index.php?r=category%2Findex">Category</a>
</ul>
</div> -->
<?php $this->endBody() ?>
</body >
</html>
<?php $this->endPage() ?>
