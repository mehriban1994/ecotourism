<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_name')->textInput(['maxlength' => true]) ?>


    <?php
//    echo $form->field($model, 'imageFile')->widget(FileInput::classname(), [
//        'options' => ['accept'=>'image/*'],
//        'pluginOptions'=>[
//            'allowedFileExtensions'=>['jpg', 'png'],
//            'showUpload' => true,
//            'initialPreview' => [
//                $model->header_image ? Yii::getAlias('@frontend').'\web\images\uz\categories\\' . $model->header_image : null
//            ],
//            'overwriteInitial' => false
//        ],
//    ]);

    echo $form->field($model, 'imageFile')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions'=>[
            'allowedFileExtensions'=>['jpg', 'png'],
            'showUpload' => false,
            'initialPreview' => [
                $model->header_image ? Html::img($model->getImageFile(), ['class' => 'file-preview-image kv-preview-data',
                                                                          'style' => 'width:auto;height:auto;max-width:100%;max-height:100%;']) : null
            ],
            'overwriteInitial' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_no')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
