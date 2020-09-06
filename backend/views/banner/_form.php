<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Banners */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banners-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?php

    if (empty($model->image)) {
        echo $form->field($model, 'imageFile')->widget(FileInput::class, [
            'options' => ['accept' => 'image/*'],
        ]);
    }
    else {
        echo '<div class="form-group">
        <h5><b>Photo</b></h5>';
        echo Html::img(Yii::getAlias('@web/uploads/banner/') . $model->image, [
            'alt'=>Yii::t('app', 'Product for ') . $model->title,
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
            Url::to(['/banner/delimage', 'id'=>$model->id]),
            ['class' => 'btn btn-primary']
        );
        echo '</div>';
    }
    ?>

    <div class="form-group">
        <?= Html::submitButton(($model->isNewRecord ? "Create" : "Update"), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
