<?php

namespace yii\easyii\modules\text\assets;

/**
 * Class TextAsset
 * @package yii\easyii\modules\text\assets
 */
class TextAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@easyii/modules/text/media';

    public $js = [
        'js/bootstrap.js',
    ];

    public $publishOptions = [
        'forceCopy' => true
    ];
}