<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ImageTypes */

$this->title = Yii::t('app', 'Create Image Types');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Image Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="image-types-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
