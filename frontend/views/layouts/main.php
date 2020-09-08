<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\assets\SellingAsset;
use yii\helpers\Url;
use yii\web\YiiAsset;

$selling = SellingAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->name) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
<div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <a href="<?= Url::to(['/site/home']) ?>" class="text-black mb-0"><img src="<?=$selling->baseUrl ?>/img/voca.jpeg" alt="" style="width:50px; height:50px;"></a>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="<?= Url::to(['/site/home']) ?>" class="nav-link">Home</a></li>
                <li><a href="<?= (Yii::$app->request->url == Url::to(['/site/home']) ? '' : Url::to(['/site/home'])) ?>#products-section" class="nav-link">Products</a></li>
                <li><a href="<?= (Yii::$app->request->url == Url::to(['/site/home']) ? '' : Url::to(['/site/home'])) ?>#testimonials-section" class="nav-link">Testimonials</a></li>
                <li><a href="<?= (Yii::$app->request->url == Url::to(['/site/home']) ? '' : Url::to(['/site/home'])) ?>#special-section" class="nav-link">Special</a></li>
                <li><a href="<?= (Yii::$app->request->url == Url::to(['/site/home']) ? '' : Url::to(['/site/home'])) ?>#belanja-section" class="nav-link">Belanja</a></li>
                <li><a href="<?= Url::to(['/site/blog']) ?>" class="nav-link">Blog</a></li>
                <?php
                if(Yii::$app->user->isGuest):
                ?>
                <li><a href="<?= Url::to(['/site/login']) ?>" class="nav-link">Membership</a></li>
                <?php
                else:
                ?>
                <li>
                <!-- <div class="dropdown"> -->
                <a class="nav-link dropdown dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span style="text-transform:uppercase"><?= Yii::$app->user->identity->username ?></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <a class="nav-link dropdown-item" href="#">Account</a>
                <?= Html::a('Logout', ['/site/logout'], ['class' => 'nav-link dropdown-item', 'data-method' => 'post'])
                ?>
                </div>
              <!-- </div> -->
                <!-- -->
                </li>
                <?php endif; ?>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

       
        <?= $content ?>

<!-- <footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer> -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>