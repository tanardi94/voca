<?php

use frontend\assets\SellingAsset;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $model frontend\models\Users */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Change Password';
$this->params['breadcrumbs'][] = $this->title;
$selling = SellingAsset::register($this);
?>
<div class="change-password"><br>
<br>
<br>
<br>
<br>
<div class="container">

<h1><?= Html::encode($this->title) ?></h1>
<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
         <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
         <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissable">
         <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
         <?= Yii::$app->session->getFlash('error') ?>
    </div>
<?php endif; ?>
    <p>Please fill out the following fields to change your password:</p>
    <div class="row">
    <div class="col-lg-6 mt-4">
    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

    <?= $form->field($additionalModel, 'old_password')->textInput(['type' => 'password'])->label('Password Anda Saat Ini') ?>
    <?= $form->field($additionalModel, 'new_password')->textInput(['type' => 'password'])->label('Password Baru Anda') ?>
    <?= $form->field($additionalModel, 'another_new_password')->textInput(['type' => 'password'])->label('Verifikasi Password Baru Anda') ?>

    

    <div class="form-group">
        <?= Html::submitButton('Change Password', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
    </div>
</div>
</div>
<br>
<br>
<br>
