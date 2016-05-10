<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        //'brandLabel' => 'Dheket',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    
    $mnu_admin = [
        ['label' => 'Home', 'url' => ['/site/index']], 
        ['label' => 'Category', 'url' => ['/category/index']],
        ['label' => 'Cat_here', 'url' => ['/cat_here/index']],
        ['label' => 'customer', 'url' => ['/customer/index']],
        ['label' => 'Location', 'url' => ['/location/index']],
        ['label' => 'Loc Here', 'url' => ['/loc_here/index']],
        ['label' => 'Loc Here Detail', 'url' => ['/loc_here_detail/index']],
        ['label' => 'Merchant', 'url' => ['/merchant/index']],
        ['label' => 'Profile', 'url' => ['/profile/index']],
        ['label' => 'Profile Detail', 'url' => ['/profile_detail/index']],
        ['label' => 'Profile Tag', 'url' => ['/profile_tag/index']],
        ['label' => 'Tag', 'url' => ['/tag/index']],
        ['label' => 'User', 'url' => ['/user/index']],
    ];
    
    $mnu_petugas = [
       ['label' => 'Home', 'url' => ['/site/index']], 
        ['label' => 'Cat Here', 'url' => ['/site/category']],
        ['label' => 'Category', 'url' => ['/site/cat_here']],
        ['label' => 'customer', 'url' => ['/site/customer']],
        ['label' => 'Loc Here', 'url' => ['/site/loc_here']],
        ['label' => 'Loc Here Detail', 'url' => ['/site/loc_here_detail']],
        ['label' => 'Location', 'url' => ['/site/location']],
        ['label' => 'Merchant', 'url' => ['/site/merchant']],
        ['label' => 'Proflie', 'url' => ['/site/profile']],
        ['label' => 'Profile Detail', 'url' => ['/site/profile_detail']],
        ['label' => 'Profile Tag', 'url' => ['/site/profile_tag']],
        ['label' => 'Tag', 'url' => ['/site/tag']],
    ];
    
    $mnu_user = [
        //['label' => 'Home', 'url' => ['/site/index']],
      //['label' => 'Signup', 'url' => ['/site/signup']],
    ];
    
    
    
    if (Yii::$app->user->isGuest) {
        $menuItems = $mnu_user;
    } else {
        if (Yii::$app->user->identity->role == '1'){
            $menuItems = $mnu_admin;
        }else{
            $menuItems = $mnu_petugas;
            
        }
    }
    
    if (Yii::$app->user->isGuest) {
        //$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Dheket <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
