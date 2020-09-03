<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\InformationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Informations';
$this->params['breadcrumbs'][] = $this->title;
$status = ['0' => 'Not Active', '1' => 'Active'];
?>
<div class="information-index box-body table-responsive">

    <h1></h1>

    <p>
        <?= Html::a('Create Information', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description:ntext',
            [
                'attribute' => 'status',
                'value' => function($data) {
                    $status = ['0' => 'Not Active', '1' => 'Active'];
                    return $status[$data->status];
                },
                'filter' => $status
            ],
            //'created_by',
            //'updated_at',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
