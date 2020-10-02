<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BlogsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blogs';
$this->params['breadcrumbs'][] = $this->title;
$status = array('Not Active', 'Active');
?>
<div class="blogs-index box-body table-responsive">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Blogs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'content:ntext',
            [
                'label' => 'Posting Date',
                'attribute' => 'created_at',
                'value' => function($data) {
                    return date('F d Y', strtotime($data->created_at));
                }
            ],
            //'updated_by',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
