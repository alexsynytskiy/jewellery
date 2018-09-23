<?php

namespace yii\easyii\modules\news\assets;

/**
 * Class NewsAsset
 * @package yii\easyii\modules\news\assets
 */
class NewsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@easyii/modules/news/media';

    public $js = [
    ];

    public $publishOptions = [
        'forceCopy' => true
    ];
}