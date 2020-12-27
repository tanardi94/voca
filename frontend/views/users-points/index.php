<?php

use backend\models\UsersPoints;
use frontend\assets\SellingAsset;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UsersPointsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$selling = SellingAsset::register($this);
$this->title = 'Users Points';
$this->params['breadcrumbs'][] = $this->title;
$shops = ['Tokopedia', 'Shopee', 'WhatsApp'];
?>
<div class="container"><br>
<br>
<br>
<br>
<br>
<div class="users-points-index box-body table-responsive">

    <!-- <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users Points', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showFooter' => true,
        'footerRowOptions'=>['style'=>'font-weight:bold;font-size:16px;'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
                }
            ],

            'amount',
            // 'id',
            // 'user_id',
            [
                'attribute' => 'points',
                'footer' => UsersPoints::getTotal($dataProvider->models, 'points')
            ],
            // 'status',
            // 'created_by',
            //'created_at',
            //'updated_by',0'9im  4d 
            //'updated_at', 
            
            
            
            'notes:ntext',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
<p>
    <?= Html::a('Back to Profile', ['/users/view', 'id' => Yii::$app->user->identity->unique_id], ['class' => 'btn btn-primary']) ?>
</p>
</div>