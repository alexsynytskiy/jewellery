<?php

/* @var $this yii\web\View */
/* @var $aboutUs \yii\easyii\modules\text\api\Text */
/* @var $getInTouch \yii\easyii\modules\text\api\Text */
/* @var $social \yii\easyii\modules\text\api\Text */
/* @var $location \yii\easyii\modules\text\api\Text */

$asset = \app\assets\AppAsset::register($this);

$baseUrl = $asset->baseUrl;
?>

<section id="page" class="clearfix">
    <!-- CATEGORY NAV -->

    <div class="sqs-layout sqs-grid-12 columns-12" data-type="page" id="page-57ebea79f7e0abae9fb77471">
        <div class="clearfix"></div>
        <div class="row sqs-row">
            <div class="col sqs-col-5 span-5">
                <div class="sqs-block html-block sqs-block-html" id="block-586e494d601611b6f93e">
                    <div class="sqs-block-content"><h1><?= $aboutUs['title'] ?></h1>
                        <p>
                            <span style="font-size:22px">
                                <?= $aboutUs['text'] ?>
                            </span>
                        </p>
                        <p>&nbsp;</p>
                        <h1><?= $getInTouch['title'] ?></h1>
                        <p><a target="_blank" href="mailto:hello@intsign.co">HELLO@INTSIGN.CO</a>&nbsp; &nbsp;<a
                                    target="_blank" href="tel:+380632720813">+380 63 272 0813</a>
                        <p>&nbsp;</p>
                        <h1><?= $social['title'] ?>&nbsp;</h1>
                        <p><a target="_blank" href="http://instagram.com/intsign.co">INSTAGRAM</a>&nbsp; &nbsp;<a
                                    target="_blank" href="https://www.facebook.com/Intsign/">FACEBOOK</a></p></div>
                </div>
            </div>
            <div class="col sqs-col-7 span-7">
                <div class="sqs-block form-block sqs-block-form" id="block-b07dc257fa287274d6a1">
                    <div class="sqs-block-content">
                        <div class="form-wrapper">
                            <div class="form-inner-wrapper">
                                <?= yii\easyii\modules\feedback\api\Feedback::form([
                                        'successUrl' => \yii\helpers\Url::to(['/contact']),
                                        'errorUrl' => \yii\helpers\Url::to(['/contact'])
                                ]); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
