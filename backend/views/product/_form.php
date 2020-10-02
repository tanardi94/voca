<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">



    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?php

    if (empty($model->photo)) {
        echo $form->field($model, 'imageFile')->widget(FileInput::class, [
            'options' => ['accept' => 'image/*'],
        ]);
    }
    else {
        echo '<div class="form-group">
        <h5><b>Photo</b></h5>';
        echo Html::img(Yii::getAlias('@web/uploads/product/') . $model->photo, [
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
            Url::to(['/product/delimage', 'id'=>$model->id]),
            ['class' => 'btn btn-primary']
        );
        echo '</div>';
    }

    if (empty($model->photo_2)) {
        echo $form->field($model, 'imageFile2')->widget(FileInput::class, [
            'options' => ['accept' => 'image/*'],
        ]);
    }
    else {
        echo '<div class="form-group">
        <h5><b>Photo</b></h5>';
        echo Html::img(Yii::getAlias('@web/uploads/product/') . $model->photo_2, [
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
            Url::to(['/product/delimage2', 'id'=>$model->id]),
            ['class' => 'btn btn-primary']
        );
        echo '</div>';
    }

    if (empty($model->photo_3)) {
        echo $form->field($model, 'imageFile3')->widget(FileInput::class, [
            'options' => ['accept' => 'image/*'],
        ]);
    }
    else {
        echo '<div class="form-group">
        <h5><b>Photo</b></h5>';
        echo Html::img(Yii::getAlias('@web/uploads/product/') . $model->photo_3, [
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
            Url::to(['/product/delimage3', 'id'=>$model->id]),
            ['class' => 'btn btn-primary']
        );
        echo '</div>';
    }
    ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(($model->isNewRecord ? 'Create' : 'Update'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
