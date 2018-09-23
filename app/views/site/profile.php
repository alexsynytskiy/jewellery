<?php

/* @var $this yii\web\View */
/* @var $photos yii\easyii\modules\gallery\api\PhotoObject[] */
/* @var $block1 \yii\easyii\modules\text\api\Text */
/* @var $block2 \yii\easyii\modules\text\api\Text */
/* @var $block3 \yii\easyii\modules\text\api\Text */

$asset = \app\assets\AppAsset::register($this);

$baseUrl = $asset->baseUrl;
?>

<section id="page" class="clearfix">
    <div class="sqs-layout sqs-grid-12 columns-12" data-type="page"
         id="page-57ebea79f7e0abae9fb77471">
        <div class="row sqs-row">
            <div class="clearfix"></div>
            <div class="col sqs-col-6 span-6">
                <div class="sqs-block html-block sqs-block-html"
                     id="block-yui_3_17_2_2_1475231568899_9030">
                    <div class="sqs-block-content"><h1><?= $block1['title'] ?></h1></div>
                </div>
            </div>
            <div class="col sqs-col-6 span-6">
                <div class="sqs-block html-block sqs-block-html"
                     id="block-yui_3_17_2_9_1475229213184_7268">
                    <div class="sqs-block-content"><p><?= $block1['text'] ?></p></div>
                </div>
            </div>
        </div>
        <div class="row sqs-row">
            <div class="col sqs-col-6 span-6">
                <div class="sqs-block html-block sqs-block-html"
                     id="block-yui_3_17_2_2_1475231568899_11497">
                    <div class="sqs-block-content"><h1><?= $block2['title'] ?></h1></div>
                </div>
            </div>
            <div class="col sqs-col-6 span-6">
                <div class="sqs-block html-block sqs-block-html"
                     id="block-yui_3_17_2_2_1475231568899_13504">
                    <div class="sqs-block-content"><?= $block2['text'] ?></div>
                </div>
            </div>
        </div>
        <div class="row sqs-row">
            <div class="col sqs-col-6 span-6">
                <div class="sqs-block html-block sqs-block-html"
                     id="block-yui_3_17_2_2_1475231568899_11497">
                    <div class="sqs-block-content"><h1><?= $block3['title'] ?></h1></div>
                </div>
            </div>
            <div class="col sqs-col-6 span-6">
                <div class="sqs-block html-block sqs-block-html"
                     id="block-yui_3_17_2_2_1475231568899_13504">
                    <div class="sqs-block-content"><?= $block3['text'] ?></div>
                </div>
            </div>
        </div>
        <div class="row sqs-row" id="yui_3_17_2_1_1537360338988_96">
            <div class="col sqs-col-12 span-12" id="yui_3_17_2_1_1537360338988_95">
                <div class="sqs-block image-block sqs-block-image sqs-text-ready"
                     id="block-yui_3_17_2_2_1475231568899_20713">
                    <div class="sqs-block-content" id="yui_3_17_2_1_1537360338988_94">
                        <div class="image-block-outer-wrapper layout-caption-below design-layout-inline"
                             id="yui_3_17_2_1_1537360338988_93">

                            <div class="intrinsic" style="max-width:1920px;" id="yui_3_17_2_1_1537360338988_92">
                                <img class="thumb-image loaded"
                                     style="width: 100%;"
                                     src="<?= $baseUrl ?>/img/123.jpg?format=1500w">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sqs-block instagram-block sqs-block-instagram" id="block-yui_3_17_2_3_1475232616143_10284">
                    <div class="sqs-block-content" id="yui_3_17_2_1_1537363311129_378">
                        <div class="sqs-gallery-container
                                  sqs-gallery-block-grid
                                  sqs-gallery-aspect-ratio-standard
                                  sqs-gallery-thumbnails-per-row-3
                                  sqs-gallery-block-meta-only-title
                                  clear" id="yui_3_17_2_1_1537363311129_112">
                            <div class="sqs-gallery sqs-gallery-design-grid" id="yui_3_17_2_1_1537363311129_129">

                                <?php foreach ($photos as $photo): ?>
                                    <div class="slide sqs-gallery-design-grid-slide sqs-active-slide" data-type="image"
                                         id="yui_3_17_2_1_1537363311129_175">
                                        <div class="margin-wrapper">
                                            <a href="" class="image-slide-anchor content-fill" style="overflow: hidden;"
                                               id="yui_3_17_2_1_1537363311129_380">
                                                <img class="thumb-image loaded" style="left: -0.307512px; top: 0; width: 393.615px; height: 262px; position: relative;"
                                                     src="<?= \yii\helpers\Html::encode($photo->image) ?>?format=500w"
                                                     alt="<?= $photo->description ?>">
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>