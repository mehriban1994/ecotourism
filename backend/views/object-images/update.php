<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ObjectImages */

$this->title = Yii::t('app', 'Update Object Images: ' . $model->object_image_id, [
    'nameAttribute' => '' . $model->object_image_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Object Images'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->object_image_id, 'url' => ['view', 'id' => $model->object_image_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="object-images-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
