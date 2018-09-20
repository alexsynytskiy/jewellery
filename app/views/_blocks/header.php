<?php

use yii\helpers\Url;

$asset = \app\assets\AppAsset::register($this);

$currentPage = Yii::$app->controller->action->id;
$controller = Yii::$app->controller->id;

$contact = '';
$portfolio = '';
$clients = '';
$blog = '';

switch ($controller) {
    case 'portfolio':
        $portfolio = "active";
        break;
    case 'clients':
        $clients = "active";
        break;
    case 'blog':
        $blog = "active";
        break;
    case 'contact':
        $contact = "active";
        break;
}
?>

<div id="canvas">
    <div id="mobileNav" class="">
        <div id="mobileNavWrapper" class="wrapper">
            <nav class="main-nav mobileNav">
                <ul>
                    <li class="index-collection">
                        <a href="<?= Url::to('portfolio') ?>">PORTFOLIO</a>
                    </li>
                    <li class="page-collection">
                        <a href="<?= Url::to('profile') ?>">PROFILE</a>
                    </li>
                    <li class="page-collection">
                        <a href="<?= Url::to('contact') ?>">CONTACT</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="mobileMenuLink"><a>Menu</a></div>
    <header id="header">
        <div id="logo" data-content-field="site-title">
            <h1 class="logo" data-shrink-original-size="16">
                <a href="/">
                    <img src="//static1.squarespace.com/static/57e91a1fe3df28942b94bccb/t/57e91e71c534a54769a0f0a0/1515686555941/?format=1000w"
                         alt="INTSIGN">
                </a>
            </h1>
            <div class="logo-subtitle" data-shrink-original-size="0">brand curation</div>
        </div>
        <div id="topNav" data-content-field="navigation">
            <nav class="main-nav">
                <ul>
                    <li class="index-collection">
                        <a href="<?= Url::to('portfolio') ?>">PORTFOLIO</a>
                    </li>
                    <li class="page-collection">
                        <a href="<?= Url::to('profile') ?>">PROFILE</a>
                    </li>
                    <li class="page-collection">
                        <a href="<?= Url::to('contact') ?>">CONTACT</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>