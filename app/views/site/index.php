<?php

/* @var $this yii\web\View */

$asset = \app\assets\AppAsset::register($this);

$baseUrl = $asset->baseUrl;
?>

<div id="canvas">
    <div id="mobileNav" class="">
        <div id="mobileNavWrapper" class="wrapper">
            <nav class="main-nav mobileNav">
                <ul>
                    <li class="index-collection">
                        <a href="/portfolio/">PORTFOLIO</a>
                    </li>
                    <li class="page-collection">
                        <a href="/profile/">PROFILE</a>
                    </li>
                    <li class="page-collection">
                        <a href="/contact/">CONTACT</a>
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
                        <a href="/portfolio/">PORTFOLIO</a>
                    </li>
                    <li class="page-collection">
                        <a href="/profile/">PROFILE</a>
                    </li>
                    <li class="page-collection">
                        <a href="/contact/">CONTACT</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="page">
        <div class="slider-1-wrapper">
            <ul class="slider-1">
                <li>
                    <img src="https://static1.squarespace.com/static/57e91a1fe3df28942b94bccb/57eb840246c3c47498337ccc/57f122bc20099ef24d21f778/1515685617953/dsc_0015-2.jpg?format=1500w"
                         alt="INTSIGN">
                </li>
                <li>
                    <img src="https://static1.squarespace.com/static/57e91a1fe3df28942b94bccb/57eb840246c3c47498337ccc/5a57871c71c10b9964723b81/1515685669309/18.jpg?format=1500w"
                         alt="INTSIGN">
                </li>
                <li>
                    <img src="https://static1.squarespace.com/static/57e91a1fe3df28942b94bccb/57eb840246c3c47498337ccc/5a578728ec212d24a8bd20b9/1515685679010/15-jakalope-bottle-berry.jpg?format=1500w"
                         alt="INTSIGN">
                </li>
            </ul>
        </div>

        <div class="sqs-gallery sqs-gallery-design-grid">
            <div class="slide sqs-gallery-design-grid-slide sqs-active-slide">
                <div class="margin-wrapper">
                    <a href="/portfolio" class="image-slide-anchor content-fit">
                        <noscript><img src="https://static1.squarespace.com/static/57e91a1fe3df28942b94bccb/57eb84fae3df28caea8e04f2/57f1123159cc68fe6a91c674/1513192119634/DSC08803.png"
                                       alt="PORTFOLIO OF WORK"  /></noscript>
                        <span class="image-slide-hover-effect" style="top: 34px; left:0px; width:1140px; height: 410px;"></span>
                        <img class="thumb-image loaded"
                             data-src="https://static1.squarespace.com/static/57e91a1fe3df28942b94bccb/57eb84fae3df28caea8e04f2/57f1123159cc68fe6a91c674/1513192119634/DSC08803.png"
                             data-image="https://static1.squarespace.com/static/57e91a1fe3df28942b94bccb/57eb84fae3df28caea8e04f2/57f1123159cc68fe6a91c674/1513192119634/DSC08803.png"
                             data-image-dimensions="1000x360" data-image-focal-point="0.5,0.5" data-load="false" data-image-id="57f1123159cc68fe6a91c674"
                             data-type="image" data-position-mode="standard"
                             style="opacity: 1; left: 0px; top: 34px; width: 1140px; position: relative;" data-parent-ratio="2.4" alt="PORTFOLIO OF WORK"
                             src="https://static1.squarespace.com/static/57e91a1fe3df28942b94bccb/57eb84fae3df28caea8e04f2/57f1123159cc68fe6a91c674/1513192119634/DSC08803.png?format=1500w"
                             data-image-resolution="1500w">
                    </a>

                    <div class="image-slide-title">PORTFOLIO OF WORK</div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="sqs-layout sqs-grid-1 columns-1" data-layout-label="Footer Content" data-type="block-field" id="footerBlock">
            <div class="row sqs-row">
                <div class="col sqs-col-1 span-1">
                    <div class="sqs-block html-block sqs-block-html" data-block-type="2" id="block-179f8c9da7aa428c1198">
                        <div class="sqs-block-content">
                            <p class="text-align-right">
                                <a target="_blank" href="mailto:hello@intsign.co">HELLO@INTSIGN.CO</a>
                                <a target="_blank" href="tel:+380632720813">+380 63 272 08 13</a>
                                <a target="_blank" href="tel:+447477458480">+44 7477 458 480</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

