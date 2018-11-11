<?php
use yii\helpers\Html;
use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\services\DirectionsWayPoint;
use dosamigos\google\maps\services\TravelMode;
use dosamigos\google\maps\overlays\PolylineOptions;
use dosamigos\google\maps\services\DirectionsRenderer;
use dosamigos\google\maps\services\DirectionsService;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;
use dosamigos\google\maps\services\DirectionsRequest;
use dosamigos\google\maps\overlays\Polygon;
use dosamigos\google\maps\layers\BicyclingLayer;


/* @var $this yii\web\View */

$this->title = $object->object_name;
$this->registerJs("
    $('.parallax1').css('background-image', 'url(images/uz/objects/". $object->getHeaderImage()->image . ")');

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

$lat_lng = explode(',', $object->location);
$lat = $lat_lng[0];
$lng = $lat_lng[1];
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
        <div class="left" style="font-weight: bold;">
            <p>Address</p>
            <p>Location</p>
        </div>
        <div class="right">
            <p><?=$object->address?></p>
            <p><?=$object->location?></p>
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

<div class="row">
    <?php
    foreach($object->getSimpleImages() as $image) :
    ?>
        <div class="col-md-4">
            <div class="flat-imagebox">
                <div class="item">
                    <div class="imagebox">
                        <div class="box-wrap">
                            <div class="box-image">
                                <a href="#"><?=Html::img('images/uz/objects/' . $image->image)?></a>
                                <div class="overlay"></div> <!-- /.overlay -->
                                <div class="imagebox-content">
                                    <ul class="imagebox-link">
                                        <li class="icon-l FromRight"><a class="popup-gallery" href="images/uz/objects/<?=$image->image?>"><span><i class="fa fa-search" aria-hidden="true"></i></span></a></li>
                                    </ul>
                                </div> <!-- /.imagebox-content -->
                            </div>
                        </div> <!-- /.box-wrap -->
                    </div> <!-- /.imagebox -->
                </div> <!-- /.item -->

            </div> <!-- /.flat-imagebox -->
        </div> <!-- /.col-md-4 -->

    <?php
    endforeach;
    ?>

</div>

    <div class="wrap-title s3">
        <h4>Map</h4>
    </div>



    <?php
    $coord = new LatLng(['lat' => $lat, 'lng' => $lng]);
    $map = new Map([
        'center' => $coord,
        'zoom' => 14,
    ]);

    // Lets add a marker now
    $marker = new Marker([
        'position' => $coord,
        'title' => $object->object_name,
    ]);

    // Provide a shared InfoWindow to the marker
    $marker->attachInfoWindow(
        new InfoWindow([
            'content' => '<div class="map_info">
                            <div class="image-box">'.Html::img('images/uz/objects/'.$object->getThumbImage()->image, ['class' => 'img-responsive img-thumbnail']).'</div>
                            <div class="info">'.$object->short_info.'</div>
                          </div>'
        ])
    );

    // Add marker to the map
    $map->addOverlay($marker);

    $map->width = '100%';
    // Display the map -finally :)
    echo $map->display();
    ?>


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
