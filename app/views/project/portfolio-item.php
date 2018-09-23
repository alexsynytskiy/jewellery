<?php
/* @var $project yii\easyii\modules\news\api\NewsObject */
/* @var $countProjects integer */
/* @var $nextValue string */
/* @var $prevValue string */
?>

<div class="clearfix"></div>
<div class="project page-project active-project sqs-dynamic-data-ready" id="yui_3_17_2_1_1537435758913_819">
    <div class="sqs-layout sqs-grid-12 columns-12" id="page-5a57764cf9619a7a6dd034aa">
        <div class="row sqs-row" id="yui_3_17_2_1_1537435758913_1220">
            <div class="col sqs-col-12 span-12" id="yui_3_17_2_1_1537435758913_1219">
                <div class="row sqs-row project-title-text">
                    <div class="col sqs-col-6 span-6">
                        <div class="sqs-block html-block sqs-block-html" id="block-bfb13ef0e0be6da67dd2">
                            <div class="sqs-block-content"><h1><?= $project->title ?></h1></div>
                        </div>
                    </div>
                </div>
                <div class="row sqs-row project-title-text">
                    <div class="col sqs-col-6 span-6">
                        <div class="sqs-block html-block sqs-block-html" id="block-bfb13ef0e08649565468">
                            <div class="sqs-block-content"><h1><?= $project->text ?></h1></div>
                        </div>
                    </div>
                </div>
                <div class="sqs-block gallery-block sqs-block-gallery" id="block-0a2bdb018cc112129714">
                    <div class="sqs-block-content" id="yui_3_17_2_1_1537435758913_1218">
                        <div class="sqs-gallery-container
                                      sqs-gallery-block-grid
                                      sqs-gallery-aspect-ratio-standard
                                      sqs-gallery-thumbnails-per-row-1
                                      sqs-gallery-block-show-meta clear" id="yui_3_17_2_1_1537435758913_853">

                            <div class="sqs-gallery sqs-gallery-design-grid"
                                 id="yui_3_17_2_1_1537435758913_870">

                                <?php foreach ($project->photos as $photo): ?>
                                    <div class="slide sqs-gallery-design-grid-slide sqs-active-slide">
                                        <div class="margin-wrapper">
                                            <a class="image-slide-anchor content-fit">
                                                <img class="thumb-image loaded"
                                                     alt="<?= $photo->description ?>"
                                                     src="<?= \yii\helpers\Html::encode($photo->image) ?>?format=1500w">
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
</div>

<?= $this->renderAjax('portfolio-navigation', [
    'countProjects' => $countProjects,
    'nextValue' => $nextValue,
    'prevValue' => $prevValue,
]) ?>
