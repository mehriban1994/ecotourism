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

$this->title = 'Map';
$this->registerJs("
    $('.parallax1').css('background-image', 'none');
");
?>

</div><!-- /.wrap-header -->


    <?php
    $sum_lat = 0;
    $sum_lng = 0;
    $n = count($objects);

    foreach($objects as $object) {
        $lat_lng = explode(',', $object->location);
        $sum_lat += $lat_lng[0];
        $sum_lng += $lat_lng[1];
    }

    $center_lat = $sum_lat / $n;
    $center_lng = $sum_lng / $n;

    $coord = new LatLng(['lat' => $center_lat, 'lng' => $center_lng]);
    $map = new Map([
        'center' => $coord,
        'zoom' => 14,
    ]);


    foreach($objects as $object) {
        $lat_lng = explode(',', $object->location);
        $lat = $lat_lng[0];
        $lng = $lat_lng[1];

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
    }

    $map->width = '100%';
    // Display the map -finally :)
    echo $map->display();
?>
