<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ImageTypes */

$this->title = Yii::t('app', 'Update Image Types: ' . $model->type_id, [
    'nameAttribute' => '' . $model->type_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Image Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->type_id, 'url' => ['view', 'id' => $model->type_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="image-types-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
