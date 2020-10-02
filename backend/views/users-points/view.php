<?php

use backend\models\Users;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\UsersPoints */
$user = Users::findOne(['status' => 1, 'id' => $model->user_id]);
$this->title = $user->name;
$this->params['breadcrumbs'][] = ['label' => 'Users Points', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="users-points-view">

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
            [
                'label' => 'Nama',
                'attribute' => 'user',
                'value' => $user->name
            ],
            'points',
            [
                'attribute' => 'amount',
                'value' => function ($data) {
                    return 'IDR ' . number_format($data->amount);
                }
            ],
            [
                'attribute' => 'transaction_date',
                'value' => function ($data) {
                    return date("d F Y", strtotime($data->transaction_date));
                }
            ],
            [
                'attribute' => 'source',
                'value' => function ($data) {
                    $shops = ['Tokopedia', 'Shopee', 'WhatsApp'];
                    return $shops[$data->source];
                }
            ],
            'notes:ntext',
        ],
    ]) ?>

</div>
