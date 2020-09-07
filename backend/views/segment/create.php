<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Segment */

$this->title = 'Create Segment';
$this->params['breadcrumbs'][] = ['label' => 'Segments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="segment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
