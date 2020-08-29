<?php

use backend\models\UsersPoints;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UsersPointsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users Points';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-points-index box-body table-responsive">

    <h1> </h1>

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

            // 'id',
            'user_id',
            [
                'label' => 'Name',
                'attribute' => 'user',
                'value' => 'user.name'
            ], 
            [
                'label' => 'Points',
                'attribute' => 'points',
                'footer' => UsersPoints::getTotal($dataProvider->models, 'points')
            ],
            // 'status',
            // 'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn'],

            
        ],
    ]); ?>


</div>
