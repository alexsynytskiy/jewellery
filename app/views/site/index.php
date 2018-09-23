<?php

/* @var $this yii\web\View */
/* @var $photos yii\easyii\modules\gallery\api\PhotoObject[] */

$asset = \app\assets\AppAsset::register($this);

$baseUrl = $asset->baseUrl;
?>

<div id="page">
    <div class="slider-1-wrapper">
        <ul class="slider-1">
            <?php foreach ($photos as $photo): ?>
                <li>
                    <img src="<?= \yii\helpers\Html::encode($photo->image) ?>?format=1500w" alt="<?= $photo->description ?>">
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="sqs-gallery sqs-gallery-design-grid">
        <div class="slide sqs-gallery-design-grid-slide sqs-active-slide">
            <div class="margin-wrapper">
                <a href="<?= \yii\helpers\Url::to('portfolio') ?>" class="image-slide-anchor content-fit">
                    <span class="image-slide-hover-effect" style="top: 0; left:0; width:1140px; height: 494px;"></span>
                    <img class="thumb-image loaded" style="opacity: 1; left: 0; width: 1140px; position: relative;"  src="<?= $baseUrl ?>/img/index-portfolio-link.jpg?format=1500w">
                </a>

                <div class="image-slide-title"><?= \Yii::t('easyii', 'PORTFOLIO OF WORK') ?></div>
            </div>
        </div>
    </div>
</div>
