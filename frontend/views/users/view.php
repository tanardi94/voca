<?php

use backend\models\UsersPoints;
use frontend\assets\SellingAsset;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Users */

$this->title = 'Profil Saya';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
$selling = SellingAsset::register($this);
?>
<div class="users-view container"><br>
<br>
<br>
<br>

    <h1 class="mb-4"><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'username',
            'name',
            'email:email',
            [
                'attribute' => 'photo',
                'value' => Yii::$app->params['users-images'] . $model->photo,
                'format' => ['image',['width'=>'200','height'=>'200']]
            ],
            [
                'attribute' => 'gender',
                'value' => function($data) {
                    $gender = ['Male' => 'Laki-laki', 'Female' => 'Perempuan'];
                    return $gender[$data->gender];
                }
            ],
            'phone',
            'address',
            [
                'attribute' => 'birth_date',
                'value' => function ($data) {
                    return date("F d Y", strtotime($data->birth_date));
                }
            ],
            [
                'label' => 'Poin Saya',
                'value' => function ($data) {
                    $points = UsersPoints::find()->where(['status' => 1, 'user_id' => $data->id])->sum('points');
                    return $points;
                }
            ],
            [
                'label'=>'',
                'format'=>'raw',
                'value'=>Html::a('Lihat Riwayat Poin Saya', ['/users-points']),
            ],
        ]
    ]) ?>

<p>
        <?= Html::a('Edit Profile', ['update', 'id' => $model->unique_id], ['class' => 'btn btn-primary']) ?>
    </p>

</div>
