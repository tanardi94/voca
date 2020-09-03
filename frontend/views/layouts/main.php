<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\ModistAsset;
use frontend\assets\SublimeAsset;
use frontend\assets\WatchAsset;
use yii\helpers\Url;

$modist = ModistAsset::register($this);
// $sublime = SublimeAsset::register($this);
// $watch = WatchAsset::register($this);
$this->title = 'Voca Beauty';
// $url = $modist->baseUrl ;
// AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <?php $this->registerCsrfMetaTags() ?> -->
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<div class="wrap">

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?= Url::to(['/site/index']) ?>"><?= $this->title ?></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?= Url::to(['/site/index']) ?>" class="nav-link">Home</a></li>
	          
	          <li class="nav-item"><a href="<?= Url::to(['/home/index']) ?>" class="nav-link">About</a></li>
            <li class="nav-item"><a href="<?= Url::to(['/site/contact']) ?>" class="nav-link">Contact</a></li>
            <?php
            
            if (Yii::$app->user->isGuest) { ?>
            <li class="nav-item"><a href="<?= Url::to(['/site/login']) ?>" class="nav-link">Login</a></li>
            <?php
          } else { ?>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="<?= Url::to(['/home/index']) ?>">Profile</a>
                <?=
          Html::a('Logout (' . Yii::$app->user->identity->username . ')',
          ['/site/logout'],
          ['class' => 'dropdown-item', 'data-method' => 'post'])
          ?>
              </div>
            </li>
          <li class="nav-item">
          
          </li>
        <?php
          }
            ?>

	        </ul>
	      </div>
	    </div>
	  </nav>



    <div class="hero-wrap js-fullheight" style="background-image: url(<?= $modist->baseUrl ?>/themes/modist/images/bg_1.jpg);">
      <div class="overlay"></div>
      <?= $content ?>
      
    </div>



          </div>

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
