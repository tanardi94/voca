<?php

/* @var $this yii\web\View */

use frontend\assets\SellingAsset;
use yii\helpers\Url;

$selling = SellingAsset::register($this);
$this->title = 'Voca Beauty Store';
?>

<div class="container">
<br>
<br>
<br>
<br>


<div class="row mt-5 mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">FAQ</h3>
            <h2 class="section-title mb-3">Informasi Tentang Voca</h2>
          </div>
        </div>

<div id="accordion">
<?php foreach ($model as $m): ?>
  <div class="card">
    <a class="card-link" data-toggle="collapse" href="<?= "#collapse" . $m->id ?>">
    <div class="card-header">
        <?= $m->question ?>
      </div>
    </a>
    <div id="<?= "collapse" . $m->id ?>" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <?= $m->answer ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>
</div>
<br>
<br>
<br>
<br>