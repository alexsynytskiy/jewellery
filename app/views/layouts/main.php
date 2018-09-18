<?php
use yii\helpers\Html;

$asset = \app\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <?= $this->render('/_blocks/_meta-tags', ['asset' => $asset]) ?>
        <?php $this->head() ?>
    </head>
    <body class="blog-sidebar-display-auto index-thumb-title-position-overlay index-item-layout-center
    thumbnail-layout-autocolumns thumbnails-on-open-page-show-all   layout-style-left page-borders-none
    gallery-page-controls-tiny-thumbnails  social-icon-style-normal  hide-social-icons show-category-navigation
    event-show-past-events event-thumbnails event-thumbnail-size-32-standard event-date-label  event-list-show-cats
    event-list-date event-list-time event-list-address   event-icalgcal-links  event-excerpts  event-item-back-link
    product-list-titles-under product-list-alignment-center product-item-size-11-square product-image-auto-crop
    product-gallery-size-11-square  show-product-price show-product-item-nav product-social-sharing
    newsletter-style-dark hide-opentable-icons opentable-style-dark small-button-style-solid small-button-shape-square
    medium-button-style-solid medium-button-shape-square large-button-style-solid large-button-shape-square
    image-block-poster-text-alignment-center image-block-card-dynamic-font-sizing image-block-card-content-position-center
    image-block-card-text-alignment-left image-block-overlap-dynamic-font-sizing image-block-overlap-content-position-center
    image-block-overlap-text-alignment-left image-block-collage-dynamic-font-sizing image-block-collage-content-position-top
    image-block-collage-text-alignment-left image-block-stack-dynamic-font-sizing image-block-stack-text-alignment-left
    button-style-solid button-corner-style-square tweak-product-quick-view-button-style-floating
    tweak-product-quick-view-button-position-bottom tweak-product-quick-view-lightbox-excerpt-display-truncate
    tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button
    tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-usd collection-type-page
    collection-57e9405af7e0ab608108d9d9 collection-layout-default homepage mobile-style-available logo-image has-primary-nav">
    <?php $this->beginBody() ?>
    <?= $this->render('/_blocks/header') ?>
    <?= $content ?>
    <?= $this->render('/_blocks/footer') ?>
    <?= $this->render('/_blocks/flash-messages'); ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>







