<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UsersPoints */

$this->title = 'Create Users Points';
$this->params['breadcrumbs'][] = ['label' => 'Users Points', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-points-create">

    <h1> </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
