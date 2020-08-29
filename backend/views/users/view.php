<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Users */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="users-view">

    <h1></h1>

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
            'status',
            'unique_id',
            'username',
            'name',
            [
                'attribute' => 'photo',
                'value' => Yii::getAlias('@web/uploads/users/') . $model->photo,
                'format' => ['image',['width'=>'200','height'=>'200']]
            ],
            'email:email',
            'gender',
            'phone',
            'address',
            [
                'attribute' => 'Birth Date',
                'value' => date('F d Y', strtotime($model->birth_date))
            ]
        ],
    ]) ?>

</div>