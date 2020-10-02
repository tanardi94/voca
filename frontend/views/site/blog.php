<?php

/* @var $this yii\web\View */

use frontend\assets\SellingAsset;
use yii\helpers\Url;

$selling = SellingAsset::register($this);
$this->title = 'Voca Beauty Store';
?>

<div class="container"><br>
<br>
<br>
<br>
        <div class="row mt-5 mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Blog</h3>
            <h2 class="section-title mb-3">Blog Posts</h2>
          </div>
        </div>

        <div class="row">
            <?php foreach ($blogs as $blog): ?>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <h2><strong><?= $blog->title ?></strong></h2>
              <div class="meta mb-4"><?= date('F d Y', strtotime($blog->created_at)) ?><span class="mx-2"></span></div>
              <?= $blog->content ?>
              <?php
              if(strlen($blog->content) > 100): ?>
              <p><a href="<?= Url::to(['site/view-blog?id=' . $blog->id]) ?>">Continue Reading...</a></p>
              <?php else: ?>
                <p></p>
              <?php endif; ?>
            </div> 
          </div>
            <?php endforeach; ?>
          
          
        </div>
      </div>