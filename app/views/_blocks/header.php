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
                        <a href="<?= Url::to('portfolio') ?>"><?= Yii::t('easyii', 'PORTFOLIO') ?></a>
                    </li>
                    <li class="page-collection">
                        <a href="<?= Url::to('profile') ?>"><?= Yii::t('easyii', 'PROFILE') ?></a>
                    </li>
                    <li class="page-collection">
                        <a href="<?= Url::to('contact') ?>"><?= Yii::t('easyii', 'CONTACT') ?></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="mobileMenuLink"><a><?= Yii::t('easyii', 'Menu') ?></a></div>
    <header id="header" class="clearfix">
        <div id="logo" data-content-field="site-title">
            <h1 class="logo" data-shrink-original-size="16">
                <a href="/">
                    <img src="<?= $asset->baseUrl ?>/img/logo.png?format=1000w" alt="INTSIGN">
                </a>
            </h1>
        </div>
        <div id="topNav" data-content-field="navigation">
            <nav class="main-nav">
                <ul>
                    <li class="index-collection">
                        <a href="<?= Url::to('portfolio') ?>"><?= Yii::t('easyii', 'PORTFOLIO') ?></a>
                    </li>
                    <li class="page-collection">
                        <a href="<?= Url::to('profile') ?>"><?= Yii::t('easyii', 'PROFILE') ?></a>
                    </li>
                    <li class="page-collection">
                        <a href="<?= Url::to('contact') ?>"><?= Yii::t('easyii', 'CONTACT') ?></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>