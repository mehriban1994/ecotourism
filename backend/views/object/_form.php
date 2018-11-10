<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Object */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="object-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'object_name')->textInput(['maxlength' => true]) ?>

    <?php
    $categories = \common\models\Category::find()->all();
    $items = \yii\helpers\ArrayHelper::map($categories, 'category_id', 'category_name');
    $params = [
        'prompt' => 'Select category'
    ];
    echo $form->field($model, 'category_id')->dropDownList($items, $params);
    ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_info')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'full_info')->widget(CKEditor::className(), [
        'options' => ['rows' => 4],
        'preset' => 'full'
    ]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
