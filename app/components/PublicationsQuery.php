<?php

namespace app\components;

use yii\base\Object;
use yii\easyii\components\helpers\LanguageHelper;
use yii\easyii\modules\news\api\News;
use yii\helpers\ArrayHelper;

/**
 * Class PublicationsQuery
 * @package app\components
 */
class PublicationsQuery extends Object
{
    /**
     * @param     $category
     * @param int $limit
     * @param array $params
     *
     * @return array|null
     */
    public static function getList($category, $limit = 9, array $params = [])
    {
        return News::items([
            'limit' => $limit,
            'language' => \Yii::$app->language !== LanguageHelper::LANG_UA ? LanguageHelper::LANG_EN : LanguageHelper::LANG_UA,
            'where' => ArrayHelper::merge([
                'category' => $category,
            ], $params),
        ]);
    }
}
