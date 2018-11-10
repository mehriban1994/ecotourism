<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ObjectImages */

$this->title = Yii::t('app', 'Create Object Images');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Object Images'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="object-images-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
