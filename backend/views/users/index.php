<?php

use yii\helpers\Html;
use yii\grid\GridView;
use rmrevin\yii\fontawesome\FA;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index box-body table-responsive">

    <h1></h1>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'name',
            //'email:email',
            //'photo',
            //'encrypted_password',
            //'salt',
            //'auth_key',
            //'updated_password',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'gender',
            //'token',
            //'password_reset_token',
            //'phone',
            //'address',
            //'birth_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
