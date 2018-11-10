<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ObjectImages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="object-images-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $objects = \common\models\Object::find()->all();
    $items = \yii\helpers\ArrayHelper::map($objects, 'object_id', 'object_name');
    $params = [
        'prompt' => 'Select object'
    ];
    echo $form->field($model, 'object_id')->dropDownList($items, $params);
    ?>

    <?= $form->field($model, 'imageFile')->widget(\kartik\file\FileInput::classname(), [
        'options' => ['accept'=>'image/*'],
        'pluginOptions'=>[
            'allowedFileExtensions'=>['jpg', 'png'],
            'showUpload' => true,
            'initialPreview' => [
                $model->image ? Html::img(Yii::getAlias('@frontend').'\web\images\uz\objects\\' . $model->image) : null
            ],
            'overwriteInitial' => true,
        ],
    ]); ?>

    <?php
    $types = \common\models\ImageTypes::find()->all();
    $items = \yii\helpers\ArrayHelper::map($types, 'type_id', 'type_name');
    $params = [
        'prompt' => 'Select image type'
    ];
    echo $form->field($model, 'type_id')->dropDownList($items, $params);
    ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
