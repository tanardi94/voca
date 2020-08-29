<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

?>
<h1>home/index</h1>

<div class="container">
    <div class="row">
        <?php

        foreach ($users as $p):
        ?>

        <h1><?= $p->name?></h1>
        <img src="<?= Yii::$app->params['users-images'] . $p->photo ?>" alt="">

        <?php
        endforeach;
        ?>
    </div>
</div>
