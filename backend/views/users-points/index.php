<?php

use backend\models\UsersPoints;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UsersPointsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users Points';
$this->params['breadcrumbs'][] = $this->title;
$shops = ['Tokopedia', 'Shopee', 'WhatsApp'];
?>
<div class="users-points-index box-body table-responsive">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users Points', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showFooter' => true,
        'footerRowOptions'=>['style'=>'font-weight:bold;font-size:16px;'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            [
                'label' => 'Nama',
                'attribute' => 'user',
                'value' => 'user.name'
            ],
            [
                'attribute' => 'source',
                'value' => function ($data) {
                    $shops = ['Tokopedia', 'Shopee', 'WhatsApp'];
                    return $shops[$data->source];
                },
                'filter' => $shops
            ],

            [
                'attribute' => 'transaction_date',
                'value' => function ($data) {
                    return date("d F Y", strtotime($data->transaction_date));
                },
            ],
            
            'amount',
            // 'status',
            // 'created_by',
            //'created_at',
            //'updated_by',
            //'updated_at',
            
            
            
            [
                'attribute' => 'points',
                'footer' => UsersPoints::getTotal($dataProvider->models, 'points')
            ],
            'notes',

            ['class' => 'yii\grid\ActionColumn'],
        ]
    ])
            ?>
