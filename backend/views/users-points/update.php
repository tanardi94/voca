<?php

use backend\models\Users;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UsersPoints */

$this->title = 'Update Users Points: ' . Users::findOne(['id' => $model->user_id])->name;
$this->params['breadcrumbs'][] = ['label' => 'Users Points', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-points-update box-body table-responsive">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
