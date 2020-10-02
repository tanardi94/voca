<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view box-body table-responsive">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'unique_id',
            'name',
            'price',
            [
                'attribute' => 'photo',
                'value' => Yii::getAlias('@web/uploads/product/') . $model->photo,
                'format' => ['image',['width'=>'200','height'=>'200']]
            ],
            [
                'attribute' => 'photo_2',
                'value' => Yii::getAlias('@web/uploads/product/') . $model->photo_2,
                'format' => ['image',['width'=>'200','height'=>'200']]
            ],
            [
                'attribute' => 'photo_3',
                'value' => Yii::getAlias('@web/uploads/product/') . $model->photo_3,
                'format' => ['image',['width'=>'200','height'=>'200']]
            ],
            'description:ntext',
        ],
    ]) ?>

</div>
