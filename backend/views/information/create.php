<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Information */

$this->title = 'Create Information';
$this->params['breadcrumbs'][] = ['label' => 'Informations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="information-create box-body table-responsive">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
