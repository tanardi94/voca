<?php

/* @var $this yii\web\View */

use frontend\assets\SellingAsset;
use yii\helpers\Html;
use yii\helpers\Url;

$selling = SellingAsset::register($this);
$this->title = 'Blog Voca Beauty';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about"><br>
<br>
<br>
<br><br>
<div class="container">
    <div class="row align-items-center justify-content-center">

    <h1><?= Html::encode($blog->title) ?></h1>
    
    </div><br>
    <div class="row">
    <div class="col-lg-3">&nbsp;</div>
    <div class="col-lg-6">

        <?= $blog->content ?>
    </div>
    <div class="col-lg-3"></div>
    </div><br>
    <br>
    <br>
<div class="row align-items-center justify-content-center">

    <span><i> Posted at <?= date('F d Y',strtotime($blog->updated_at)) ?></i></span>

    </div>

<br>
<br>
<br>
<a href="<?= Url::to(['site/blog']) ?>">Back to Blog</a>
</div>
</div>