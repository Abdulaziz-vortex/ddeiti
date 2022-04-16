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

<!--<header>-->
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
//        ],
//    ]);
//    $menuItems = [
//        ['label' => 'Home', 'url' => ['/site/index']],
//        ['label' => 'About', 'url' => ['/site/about']],
//        ['label' => 'Contact', 'url' => ['/site/contact']],
//    ];
//    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//    } else {
//        $menuItems[] = '<li>'
//            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link logout']
//            )
//            . Html::endForm()
//            . '</li>';
//    }
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav ml-auto'],
//        'items' => $menuItems,
//    ]);
//    NavBar::end();
//    ?>
<!--</header>-->
<!--<header class="header">-->
<!--	<div class="header__top">-->
<!--		<div class="header__container">-->
<!--			<div class="header__logo">-->
<!--				<a href="">-->
<!--					<span class="top">DDEITI</span>-->
<!--					<span class="sub">Don Va Dukkakli ekinlar ilmiy Tadkikot Instituti</span>-->
<!--				</a>-->
<!--			</div>-->
<!---->
<!--			<div class="header__top-right">-->
<!--				<div class="header__search">-->
<!--					<a href="" class="header__top-links">-->
<!--						<i class="fas fa-search me-1"></i>Qidiruv-->
<!--					</a>-->
<!--				</div>-->
<!--				<div class="header__lang">-->
<!--					<a href="" class="header__top-links">-->
<!--						<i class="fas fa-globe-americas me-1"></i>Uz-->
<!--					</a>-->
<!--				</div>-->
<!--				<div class="header__phone">-->
<!--					<div class="phone-icon"><i class="fas fa-phone"></i></div>-->
<!--					<h3>+998 93 417-08-86</h3>-->
<!--					<a href="#">заказать звонок</a>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--	<div class="header__bottom">-->
<!--		<div class="header__container">-->
<!--			<ul>-->
<!--				<li><a href="">Асосий сахифа</a></li>-->
<!--				<li><a href="">Рахбарият</a></li>-->
<!--				<li><a href="">Янгиликлар</a></li>-->
<!--				<li><a href="">Рахбарият</a></li>-->
<!--				<li><a href="">Янгиликлар</a></li>-->
<!--			</ul>-->
<!--		</div>-->
<!--	</div>-->
<!--</header>-->

<!-- Page Header-->
<header class="page-head">
	<!-- RD Navbar-->
	<div class="rd-navbar-wrap bg-transparent rd-navbar-wrap-mod-1">
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
						<li class="active"><a href="./">Асосийсахифа</a></li>
						<li><a href="<?= \yii\helpers\Url::to(['site/about']) ?>">Институт хакида</a></li>
						<li><a href="typography.html">Янгиликлар</a></li>
						<li class="rd-navbar--has-dropdown"><a href="typography.html">Галерея</a>
							<ul class="rd-navbar-dropdown">
								<li><a class="" href="#"><i class="fas fa-image mr-2 "></i>Фото</a></li>
								<li><a class="" href="#"><i class="fas fa-video mr-2 "></i>Видео</a></li>
							</ul>
						</li>
						<li><a href="contact_us.html">Богланиш</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

</header>

<main role="main" class="flex-shrink-0">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
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
