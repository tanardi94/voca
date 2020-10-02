<?php

/* @var $this yii\web\View */

use frontend\assets\SellingAsset;
use yii\helpers\Html;

$selling = SellingAsset::register($this);
$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-about"><br>
<br>
<br>
<br><br>
<div class="container">
<div class="row mt-5 mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">About Us</h3>
            <h2 class="section-title mb-3"><?= $model->title ?></h2>
          </div>
        </div>
    <div class="row">
    <div class="col-lg-3">&nbsp;</div>
    <div class="col-lg-6">

        <?= $model->content ?>
    </div>
    <div class="col-lg-3"></div>
    </div>

    </div>

</div>
</div>
