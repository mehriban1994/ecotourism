<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\Category;

AppAsset::register($this);
$this->title = "Welcome to Uzbekistan!";
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and touch icons  -->
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="header_sticky">
<?php $this->beginBody() ?>
<div class="boxed">
    <div class="wrap-header s1">
        <!-- Header -->
        <header id="header" class="header s1 clearfix">
            <div class="container">
                <div class="row">
                    <div class="header-wrap clearfix">
                        <div class="col-lg-3 col-md-2">
                            <div id="logo" class="logo">
                                <a href="<?=Yii::$app->homeUrl?>"><img src="images/logo.png" alt="image"></a>
                            </div><!-- /.logo -->
                            <div class="btn-menu">
                                <span></span>
                            </div><!-- //mobile menu button -->
                        </div>
                        <div class="col-lg-9 col-md-10">
                            <div class="nav-wrap">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        <li class="active"><?=Html::a('Home', ['site/index'])?></li>
                                        <li><a href="#"><i class="fa fa-map-marker"></i>&nbsp;Map</a></li>
                                        <li><?=Html::a('Hotels', ['site/category', 'slug' => 'hotels'])?></li>
                                        <li><?=Html::a('Restaurants and cafes', ['site/category', 'slug' => 'restaurants'])?></li>
                                        <li><a href="#">Places</a>
                                            <ul class="submenu right-sub-menu">
                                                <li><?=Html::a('Historical places', ['site/category', 'slug' => 'historical-places'])?></li>
                                                <li><?=Html::a('Sights', ['site/category', 'slug' => 'sights'])?></li>
                                            </ul>
                                        </li>
                                        <!--<li><a href="gallery-masonry.html">Adventures</a></li>
                                        <li><a href="destination.html">Destination</a>
                                            <ul class="submenu right-sub-menu">
                                                <li><a href="destination-single-details.html">Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="tour_guide.html">Tour Guide</a></li>
                                        <li><a href="blog.html">Blog</a>
                                            <ul class="submenu right-sub-menu">
                                                <li><a href="blog-single.html">Blog Single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about-us.html">Pages</a>
                                            <ul class="submenu right-sub-menu">
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>
                                        </li>-->
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li class="show-search"><a href="#"><i class="fa fa-search"></i></a></li>
                                    </ul><!-- /.menu -->
                                </nav><!-- /.mainnav -->
                                <div class="top-search">
                                    <form action="#" id="searchform-all" method="get">
                                        <div>
                                            <input type="text" id="s" class="sss" placeholder="Search...">
                                            <input type="submit" value="" id="searchsubmit">
                                        </div>
                                    </form>
                                </div>
                            </div><!-- /.nav-wrap -->
                        </div>
                    </div><!-- /.header-inner -->
                </div><!-- /.row -->
            </div>
        </header><!-- /.header -->

        <!-- slide -->
        <div id="banner-container" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
        <div id="banner-slide" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
        <div class="slotholder"></div>


        <ul><!-- SLIDE  -->

        <!-- SLIDE 1 -->
        <li data-index="rs-3049" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

            <!-- MAIN IMAGE -->
            <img src="images/uz/slide1.jpg"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
            <!-- LAYERS -->

            <!-- LAYER NR. 11 -->
            <div class="tp-caption sub-title color-white letter-spacing0_5"
                 id="slide-3049-layer-1"
                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                 data-y="['middle','middle','middle','middle']" data-voffset="['-166','-126','-86','-46']"
                 data-fontsize="['25','22','19','17']"
                 data-lineheight="['80','65','45','35']"
                 data-fontweight="['700','700','700','700']"
                 data-width="none"
                 data-height="none"
                 data-whitespace="nowrap"
                 data-fontfamily="Alegreya"

                 data-type="text"
                 data-responsive_offset="on"

                 data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                 data-textAlign="['center','center','center','center']"
                 data-paddingtop="[10,10,10,10]"
                 data-paddingright="[0,0,0,0]"
                 data-paddingbottom="[0,0,0,0"
                 data-paddingleft="[0,0,0,0]"

                 style="z-index: 16; white-space: nowrap;text-transform:left;">
                PEARL OF EAST
            </div>

            <!-- LAYER NR. 12 -->
            <div class="tp-caption title-slide color-white"
                 id="slide-3050-layer-1"
                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                 data-y="['middle','middle','middle','middle']" data-voffset="['-125','-95','-55','-15']"
                 data-fontsize="['40','35','30','20']"
                 data-lineheight="['80','65','45','35']"
                 data-fontweight="['700','700','700','700']"
                 data-width="none"
                 data-height="none"
                 data-whitespace="nowrap"

                 data-type="text"
                 data-responsive_offset="on"

                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                 data-textAlign="['center','center','center','center']"
                 data-paddingtop="[10,10,10,10]"
                 data-paddingright="[0,0,0,0]"
                 data-paddingbottom="[0,0,0,0"
                 data-paddingleft="[0,0,0,0]"

                 style="z-index: 16; white-space: nowrap;text-transform:left;">Welcome to <span>Uzbekistan</span>!
            </div>

            <!-- LAYER NR. 13 -->
            <div class="tp-caption sub-title color-white letter-spacing0_35"
                 id="slide-3051-layer-4"
                 data-x="['center','center','center','center']" data-hoffset="['0','10','30','50']"
                 data-y="['middle','middle','middle','middle']" data-voffset="['-55','-25','5','35']"
                 data-fontsize="['17',15','12','10']"
                 data-lineheight="['24','20','14','14']"
                 data-fontweight="['400','300','300','300']"
                 data-width="['830','730','630','430']"
                 data-height="none"
                 data-whitespace="['nowrap','nowrap','normal','normal']"

                 data-type="text"
                 data-responsive_offset="on"

                 data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                 data-textAlign="['center','center','center','center']"
                 data-paddingtop="[0,0,0,0]"
                 data-paddingright="[0,0,0,100]"
                 data-paddingbottom="[0,0,0,0]"
                 data-paddingleft="[0,0,0,0]"

                 style="z-index: 17; white-space: nowrap;text-transform:left;">
                Uzbekistan - the Heart of the Silk Road, the land of ancient cities - centers of ancient civilizations,<br> unique architectural monuments, unique landscapes and natural beauty!
            </div>
        </li>

        <!-- SLIDE 2 -->
        <li data-index="rs-3048" data-transition="random-static" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="HTML5 Video" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

            <!-- MAIN IMAGE -->
            <img src="images/uz/slide2.jpg"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
            <!-- LAYERS -->

            <!-- LAYER NR. 11 -->
            <div class="tp-caption sub-title color-white letter-spacing0_5"
                 id="slide-3052-layer-1"
                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                 data-y="['middle','middle','middle','middle']" data-voffset="['-166','-126','-86','-46']"
                 data-fontsize="['25','22','19','17']"
                 data-lineheight="['80','65','45','35']"
                 data-fontweight="['700','700','700','700']"
                 data-width="none"
                 data-height="none"
                 data-whitespace="nowrap"
                 data-fontfamily="Alegreya"

                 data-type="text"
                 data-responsive_offset="on"

                 data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                 data-textAlign="['center','center','center','center']"
                 data-paddingtop="[10,10,10,10]"
                 data-paddingright="[0,0,0,0]"
                 data-paddingbottom="[0,0,0,0"
                 data-paddingleft="[0,0,0,0]"

                 style="z-index: 16; white-space: nowrap;text-transform:left;">Amazing sights of Uzbeksitan
            </div>

            <!-- LAYER NR. 12 -->
            <div class="tp-caption title-slide color-white"
                 id="slide-3053-layer-1"
                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                 data-y="['middle','middle','middle','middle']" data-voffset="['-125','-95','-55','-15']"
                 data-fontsize="['40','35','30','20']"
                 data-lineheight="['80','65','45','35']"
                 data-fontweight="['700','700','700','700']"
                 data-width="none"
                 data-height="none"
                 data-whitespace="nowrap"

                 data-type="text"
                 data-responsive_offset="on"

                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                 data-textAlign="['center','center','center','center']"
                 data-paddingtop="[10,10,10,10]"
                 data-paddingright="[0,0,0,0]"
                 data-paddingbottom="[0,0,0,0"
                 data-paddingleft="[0,0,0,0]"

                 style="z-index: 16; white-space: nowrap;text-transform:left;">Relatively distant Geographical locations
            </div>

            <!-- LAYER NR. 13 -->
            <div class="tp-caption sub-title color-white letter-spacing0_35"
                 id="slide-3054-layer-4"
                 data-x="['center','center','center','center']" data-hoffset="['0','10','30','50']"
                 data-y="['middle','middle','middle','middle']" data-voffset="['-55','-25','5','35']"
                 data-fontsize="['17',15','12','10']"
                 data-lineheight="['24','20','14','14']"
                 data-fontweight="['400','300','300','300']"
                 data-width="['830','730','630','430']"
                 data-height="none"
                 data-whitespace="['nowrap','nowrap','normal','normal']"

                 data-type="text"
                 data-responsive_offset="on"

                 data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                 data-textAlign="['center','center','center','center']"
                 data-paddingtop="[0,0,0,0]"
                 data-paddingright="[0,0,0,100]"
                 data-paddingbottom="[0,0,0,0]"
                 data-paddingleft="[0,0,0,0]"

                 style="z-index: 17; white-space: nowrap;text-transform:left;">
                Today Uzbekistan with its numerous ancient monuments, rich nature, and the present-day rapid progress <br>attracts the whole world's attention.
            </div>
        </li>

        <!-- SLIDE 3 -->
        <li data-index="rs-3047" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

            <!-- MAIN IMAGE -->
            <img src="images/uz/slide3.jpg"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
            <!-- LAYERS -->

            <!-- LAYER NR. 11 -->
            <div class="tp-caption sub-title color-white letter-spacing0_5"
                 id="slide-3055-layer-1"
                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                 data-y="['middle','middle','middle','middle']" data-voffset="['-166','-126','-86','-46']"
                 data-fontsize="['25','22','19','17']"
                 data-lineheight="['80','65','45','35']"
                 data-fontweight="['700','700','700','700']"
                 data-width="none"
                 data-height="none"
                 data-whitespace="nowrap"
                 data-fontfamily="Alegreya"

                 data-type="text"
                 data-responsive_offset="on"

                 data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                 data-textAlign="['center','center','center','center']"
                 data-paddingtop="[10,10,10,10]"
                 data-paddingright="[0,0,0,0]"
                 data-paddingbottom="[0,0,0,0"
                 data-paddingleft="[0,0,0,0]"

                 style="z-index: 16; white-space: nowrap;text-transform:left;">Hightlights of <span>Uzbekistan</span>!
            </div>

            <!-- LAYER NR. 12 -->
            <div class="tp-caption title-slide color-white"
                 id="slide-3056-layer-1"
                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                 data-y="['middle','middle','middle','middle']" data-voffset="['-125','-95','-55','-15']"
                 data-fontsize="['40','35','30','20']"
                 data-lineheight="['80','65','45','35']"
                 data-fontweight="['700','700','700','700']"
                 data-width="none"
                 data-height="none"
                 data-whitespace="nowrap"

                 data-type="text"
                 data-responsive_offset="on"

                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                 data-textAlign="['center','center','center','center']"
                 data-paddingtop="[10,10,10,10]"
                 data-paddingright="[0,0,0,0]"
                 data-paddingbottom="[0,0,0,0"
                 data-paddingleft="[0,0,0,0]"

                 style="z-index: 16; white-space: nowrap;text-transform:left;">Ancient high culture with its exceptional architectural patterns.
            </div>

            <!-- LAYER NR. 13 -->
            <div class="tp-caption sub-title color-white letter-spacing0_35"
                 id="slide-3057-layer-4"
                 data-x="['center','center','center','center']" data-hoffset="['0','10','30','50']"
                 data-y="['middle','middle','middle','middle']" data-voffset="['-55','-25','5','35']"
                 data-fontsize="['17',15','12','10']"
                 data-lineheight="['24','20','14','14']"
                 data-fontweight="['400','300','300','300']"
                 data-width="['830','730','630','430']"
                 data-height="none"
                 data-whitespace="['nowrap','nowrap','normal','normal']"

                 data-type="text"
                 data-responsive_offset="on"

                 data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                 data-textAlign="['center','center','center','center']"
                 data-paddingtop="[0,0,0,0]"
                 data-paddingright="[0,0,0,100]"
                 data-paddingbottom="[0,0,0,0]"
                 data-paddingleft="[0,0,0,0]"

                 style="z-index: 17; white-space: nowrap;text-transform:left;">
                Famous historians of the East in their writings on the ancient cities such as Bukhara, Samarkand and Khiva and other places <br> mention palaces of the rulers, places of residence of aristocracy, market places, madrasah, mausoleums, and describe<br> them as very beautiful with evergreen gardens.
            </div>
        </li>
 </ul>

        <div class="slide-social-list">
            <ul>
                <li class="facebook"><a href="#"></a></li>
                <li class="twitter active"><a href="#"></a></li>
                <li class="vimeo"><a href="#"></a></li>
                <li class="instagram"><a href="#"></a></li>
                <li class="pinterest"><a href="#"></a></li>
            </ul>
        </div>

        </div>
        </div><!-- END REVOLUTION SLIDER -->


    </div><!-- /.wrap-header -->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>


        <!-- Footer -->
        <div class="parallax parallax7 overlay-s3 parallax-footer">
            <div class="overlay-parallax"></div>
            <footer class="footer style2 color-white text-center">
                <div class="footer-widgets">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="widget widget_address">
                                    <h4 class="widget-title">Address</h4>
                                    <div class="textwidget">
                                        <ul>
                                            <li>Uzbekistan, Tashkent</li>
                                        </ul>
                                    </div><!-- /.textwidget -->
                                </div><!-- /.widget -->
                            </div><!-- /.col-md-4 -->

                            <div class="col-md-4">
                                <div id="nav_menu-1" class="widget widget_email">
                                    <h4 class="widget-title">Email</h4>
                                    <div class="menu-footer-container">
                                        <ul>
                                            <li><a href="#">info@sd-uzbekistan.uz</a></li>
                                            <li><a href="#">support@sd-uzbekistan.uz</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- /.col-md-4 -->

                            <div class="col-md-4">
                                <div id="nav_menu-2" class="widget widget_phone">
                                    <h4 class="widget-title">Phone</h4>
                                    <div class="menu-footer-container">
                                        <ul>
                                            <li><a href="#">+99894 222 6805</a></li>
                                            <li><a href="#">+99899 861 6805</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- /.col-md-4 -->

                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.footer-widgets -->

            </footer>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="border border-footer"></div>
                    </div>
                </div>
            </div>

            <!-- Bottom -->
            <div class="bottom style2 color-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright text-center">
                                <div class="copyright-social-list">
                                    <ul>
                                        <li class="facebook"><a href="#"></a></li>
                                        <li class="twitter active"><a href="#"></a></li>
                                        <li class="vimeo"><a href="#"></a></li>
                                        <li class="instagram" ><a href="#"></a></li>
                                        <li class="pinterest"><a href="#"></a></li>
                                    </ul>
                                </div>

                                <p class="copyright-text">&copy; <?= date('Y') ?> <a href="#">ESB & NDA</a>
                                </p>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>
        </div>
        <!-- Go Top -->
        <a class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>



    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
