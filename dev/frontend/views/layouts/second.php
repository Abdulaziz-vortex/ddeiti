<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <!-- Page Header-->
    <header class="page-head bg-about">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap bg-transparent">
            <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-stick-up-offset="100px">
                <!--(data-layout='rd-navbar-fixed',data-sm-layout='rd-navbar-fullwidth', data-lg-layout=rd_navbar_data_ajuster )-->
                <div class="rd-navbar-top-panel bg-accent">
                    <div class="rd-navbar-inner">
                        <button class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".list-inline" type="submit"><span></span></button><a class="fa-envelope" href="mailto:#">info@demolink.org</a><a class="fa-mobile-phone preffix-2" href="tel:#">1-800-1234-567</a>
                        <ul class="list-inline pull-right">
                            <li><a class="fa-facebook" href="#"></a></li>
                            <li><a class="fa-twitter" href="#"></a></li>
                            <li><a class="fa-pinterest-p" href="#"></a></li>
                            <li><a class="fa-vimeo" href="#"></a></li>
                            <li><a class="fa-google-plus" href="#"></a></li>
                            <li><a class="fa-rss" href="#"></a></li>
                            <li class="text-left"><a class="fa-envelope" href="mailto:#">info@demolink.org</a></li>
                            <li class="text-left"><a class="fa-mobile-phone" href="tel:#">1-800-1234-567</a></li>
                        </ul>
                    </div>
                </div>
                <div class="rd-navbar-inner">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap" type="submit"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img src="/img/logo.png" alt="logo" style="width: 100px"></a></div>
                    </div>
                    <div class="rd-navbar-nav-wrap">
                        <!-- RD Navbar Search-->
                        <div class="rd-navbar-search">
                            <form class="rd-search rd-navbar-search-form" action="#" data-search-live="rd-search-results-live" method="GET">
                                <label class="rd-navbar-search-form-input">
                                    <input type="text" name="s" placeholder="Search.." autocomplete="off">
                                </label>
                                <button class="rd-navbar-search-form-submit fa-shopping-cart" type="submit"></button>
                            </form>
                            <div class="rd-search-results-live rd-navbar-live-search-results" id="rd-search-results-live"></div>
                            <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-live-search-results" type="submit"></button>
                        </div>
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="active"><a href="./">Асосий сахифа</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="contact_us.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
	    <section class="relative text-center">
		    <div class="container">
			    <div class="jumbotron text-left">
				    <h1><span class='font-weight-bold'><?= isset($this->params['page_heading']) ? $this->params['page_heading'] : 'Page Heading' ?></span>
				    </h1>
			    </div>
		    </div>
	    </section>
    </header>

    <main role="main" class="flex-shrink-0">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </main>
    <main class="page-content">
	    <section class="bg-light section-xl">
		    <div class="container">
			    <ol class="breadcrumb">
				    <li><a href="index.html">Home</a></li>
				    <li><a href="#">Pages</a></li>
				    <li class="active">About us</li>
			    </ol>
		    </div>
	    </section>
        <?= Alert::widget() ?>
        <?= $content ?>
    </main>

    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
            <p class="float-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
