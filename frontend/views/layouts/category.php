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
    <div class="wrap-header s2 parallax parallax1 overlay-s2">
        <div class="overlay-parallax"></div>
        <!-- Header -->
        <header id="header" class="header s3 clearfix">
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
                                        <li><?=Html::a('<i class="fa fa-map-marker"></i>&nbsp;Map', ['site/map'])?></li>
                                        <li><?=Html::a('Hotels', ['site/category', 'slug' => 'hotels'])?></li>
                                        <li><?=Html::a('Restaurants and cafes', ['site/category', 'slug' => 'restaurants'])?></li>
                                        <li><a href="#">Places</a>
                                            <ul class="submenu right-sub-menu">
                                                <li><?=Html::a('Historical places', ['site/category', 'slug' => 'historical-places'])?></li>
                                                <li><?=Html::a('Sights', ['site/category', 'slug' => 'sights'])?></li>
                                            </ul>
                                        </li>
                                        <li class="show-search"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
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
