<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use kartik\file\FileInput;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?php

    if (empty($model->photo)) {
        echo $form->field($model, 'imageFile')->widget(FileInput::class, [
            'options' => ['accept' => 'image/*'],
        ]);
    }
    else {
        echo '<div class="form-group">
        <h5><b>Photo</b></h5>';
        echo Html::img(Yii::getAlias('@web/uploads/users/') . $model->photo, [
            'alt'=>Yii::t('app', 'Product for ') . $model->name,
            'title'=>Yii::t('app', 'Click remove button below to remove this image'),
            'class'=>'file-preview-image',
            'width' => 200,
            'height' => 200
            // add a CSS class to make your image styling consistent
        ]);
        echo '</div>
        <div class="form-group">';
        echo Html::a(
            Yii::t('app', 'Change Image'), 
            Url::to(['/users/delimage', 'id'=>$model->id]),
            ['class' => 'btn btn-primary']
        );
        echo '</div>';
    }
    ?>

    <?= $form->field($model, 'gender')->dropDownList([
        'Male' => 'Male', 'Female' => 'Female'
    ]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_date')->widget('dosamigos\datepicker\DatePicker', [
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton(($model->isNewRecord ? 'Create' : 'Update'), ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
