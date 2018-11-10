<?php
use yii\helpers\Html;
use frontend\widgets\ObjectWidget;
use yii\grid\GridView;
use common\models\Category;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */

$this->title = $category->category_name;
$this->registerJs("
    $('.parallax1').css('background-image', 'url(images/uz/categories/". $category->header_image . ")');
");

?>


<!-- Page title -->
<div class="page-title">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="page-title-heading">
                    <h1 class="title"><?=$category->category_name?></h1>
                </div><!-- /.page-title-captions -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->
</div><!-- /.wrap-header -->

<!-- imagebox -->
<section class="flat-row pd-imagebox v4">
<div class="container">
<div class="row">

    <?php Pjax::begin(['id' => 'objects']) ?>
    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'layout'       => ObjectWidget::widget(['dataProvider' => $dataProvider])
    ]); ?>
    <?php Pjax::end() ?>

</div>

</div>
</section>