<?php
use yii\helpers\Html;
use frontend\widgets\ObjectWidget;
use yii\grid\GridView;
use common\models\Category;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */

$this->title = $object->object_name;
$this->registerJs("
    $('.parallax1').css('background-image', 'url(images/uz/categories/". $object->getHeaderImage() . ")');

    $('.smoothScroll').on('click', function (event) {
        if (this.hash !== '') {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 200
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });

    $('#sidebar1').theiaStickySidebar({
        additionalMarginTop: 150
    });
");
?>

<!-- Page title -->
<div class="page-title">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="page-title-heading">
                    <h1 class="title"><?=$object->object_name?></h1>
                </div><!-- /.page-title-captions -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->
</div><!-- /.wrap-header -->

<!-- imagebox -->
<!-- Blog posts -->
<section class="flat-row pd-destination-details bg-theme">
<div class="container">
<div class="row">
<div class="col-md-9">
<div class="wrap-destination-detail theiaStickySidebar">
<div class="wrap-title">
    <h4>Your need to know</h4>
</div>

<div class="box-map" id="address">
    <div class="info-map">
        <div class="left">
            <p>Location</p>
            <p>Visa requirement</p>
        </div>
        <div class="right">
            <p>:Europe, France</p>
            <p>:Yes</p>
        </div>
    </div>
    <div class="info-map">
        <div class="left">
            <p>Location</p>
            <p>Visa requirement</p>
        </div>
        <div class="right">
            <p>:Europe, France</p>
            <p>:Yes</p>
        </div>
    </div>
</div>

<div class="wrap-title s2" id="info">
    <h4>About <?=$object->object_name?></h4>
</div>
<p class="content-destination"><?=$object->full_info?></p>

<div class="wrap-title s3" id="gallery">
    <h4>Gallery</h4>
</div>

<div class="wrap-imagebox">
    <?php
    foreach($object->getSimpleImages() as $image) :
    ?>
    <div class="wrap-item-imagebox">
        <div class="flat-imagebox style2 v3">
            <div class="item">
                <div class="imagebox">
                    <div class="box-wrap">
                        <div class="box-image">
                            <a href="#"><img src=images/uz/objects/"<?=$image?>" alt="img"></a>
                            <div class="overlay"></div> <!-- /.overlay -->
                        </div>
                    </div> <!-- /.box-wrap -->
                </div> <!-- /.imagebox -->
            </div> <!-- /.item -->

            <div class="dividers dividers-imagebox s2 v3"></div>

        </div> <!-- /.flat-imagebox -->
    </div> <!-- /.wrap-item-imagebox -->
    <?php
    endforeach;
    ?>

</div>
    <div class="wrap-title s3" id="map">
        <h4>Map</h4>
    </div>
    <div>
        <div class="gm-map">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="map"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div><!-- /.post-wrap -->

</div><!-- /.col-md-9 -->

<div class="col-md-3">
    <div class="sidebar1">

        <div class="theiaStickySidebar">
            <ul id="tools_2">

                <li id="button-about">
                    <a href="#address" class="smoothScroll">
                        <i class="fa fa-globe"></i>Address
                    </a>
                </li>
                <li id="button-about">
                    <a href="#info" class="smoothScroll">
                        <i class="fa fa-info"></i>Info
                    </a>
                </li>
                <li id="button-gallery">
                    <a href="#gallery" class="smoothScroll">
                        <i class="fa fa-image"></i>Gallery
                    </a>
                </li>
                <li id="button-about">
                    <a href="#map" class="smoothScroll">
                        <i class="fa fa-map-marker"></i>Map
                    </a>
                </li>
            </ul>
        </div>

    </div><!-- /.sidebar -->
</div><!-- /.col-md-3 -->
</div><!-- /.row -->
</div><!-- /.container -->
</section>
