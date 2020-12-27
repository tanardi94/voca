<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
            <a href="<?= Url::to(['/site/index']) ?>" class="text-black mb-0"><img src="<?=$selling->baseUrl ?>/img/voca.jpeg" alt="" style="width:50px; height:50px;"></a>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="<?= (Yii::$app->request->url == Url::to(['/site/index']) ? '' : Url::to(['/site/index'])) ?>#" class="nav-link">Home</a></li>
                <li><a href="<?= (Yii::$app->request->url == Url::to(['/site/index']) ? '' : Url::to(['/site/index'])) ?>#products-section" class="nav-link">Products</a></li>
                <li><a href="<?= (Yii::$app->request->url == Url::to(['/site/index']) ? '' : Url::to(['/site/index'])) ?>#testimonials-section" class="nav-link">Testimonials</a></li>
                <li><a href="<?= (Yii::$app->request->url == Url::to(['/site/index']) ? '' : Url::to(['/site/index'])) ?>#special-section" class="nav-link">Special</a></li>
                <li><a href="<?= (Yii::$app->request->url == Url::to(['/site/index']) ? '' : Url::to(['/site/index'])) ?>#belanja-section" class="nav-link">Belanja</a></li>
                <li><a href="<?= Url::to(['/site/blog']) ?>" class="nav-link">Blog</a></li>
                <?php
                if(Yii::$app->user->isGuest):
                ?>
                <li><a href="<?= Url::to(['/site/login']) ?>" class="nav-link"><strong>AKUN</strong></a></li>
                <?php
                else:
                ?>
                <li>
                <!-- <div class="dropdown"> -->
                <a class="nav-link dropdown dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span style="text-transform:uppercase"><?= Yii::$app->user->identity->username ?></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <a class="nav-link dropdown-item" href="<?= Url::to(['/users/view/?id=' . Yii::$app->user->identity->unique_id]) ?>">Account</a>
                  <a class="nav-link dropdown-item" href="<?= Url::to(['/users/changepw/?unique_id=' . Yii::$app->user->identity->unique_id]) ?>">Change Password</a>
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
        
        <footer class="site-footer bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4">
                <h2 class="footer-heading mb-4">Informasi</h2>
                <ul class="list-unstyled">
                  <li><a href="<?= Url::to(['site/about'])?>" target="_blank">Tentang Voca Beauty Store</a></li>
                  <li><a href="<?= Url::to(['/home/faq']) ?>">Frequently Asked Question</a></li>
                  <li><a href="<?= Url::to(['site/login'])?>" target="_blank">Seputar Membership</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <h2 class="footer-heading mb-4">Belanja</h2>
                <ul class="list-unstyled">
                  <li><a href="https://shopee.co.id/vocaofficial" target="_blank">Shopee</a></li>
                  <li><a href="https://www.tokopedia.com/vocaofficial" target="_blank">Tokopedia</a></li>
                  <li><a href="https://api.whatsapp.com/send?phone=6281232999913&text=Halo%20Kak, saya%20mau%20memesan%20produk%20VOCA." target="_blank">WhatsApp</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <ul class="list-unstyled">
                <li><span class="icon-whatsapp mr-3"></span>(+62) 818 - 596 - 813</li>
                <li>
                <a href="https://www.instagram.com/vocabeautystore/" target="_blank">
                  <span class="icon-instagram mr-3"></span>Voca Beauty Store
                  </a>
                </li>
                <li>
                  <span class="icon-envelope mr-3"></span>officialvoca@gmail.com
                </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>