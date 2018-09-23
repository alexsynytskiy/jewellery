<?php

namespace yii\easyii\modules\text\api;

use Yii;
use yii\easyii\components\API;
use yii\easyii\components\helpers\LanguageHelper;
use yii\easyii\helpers\Data;
use yii\easyii\modules\text\models\Text as TextModel;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * Text module API
 * @package yii\easyii\modules\text\api
 *
 * @method static get(mixed $id_slug) Get text block by id or slug
 */
class Text extends API
{
    private $_texts = [];

    public function init()
    {
        parent::init();

        $language = \Yii::$app->language !== LanguageHelper::LANG_UA ? LanguageHelper::LANG_EN : LanguageHelper::LANG_UA;

        $this->_texts = Data::cache(TextModel::CACHE_KEY . '_' . $language, 3600, function () use ($language) {
            return TextModel::find()->localized($language)->asArray()->all();
        });
    }

    public function api_get($id_slug)
    {
        if (($text = $this->findText($id_slug)) === null) {
            return $this->notFound($id_slug);
        }

        return LIVE_EDIT ? API::liveEdit($text['translation']['text'], Url::to(['/admin/text/a/edit/',
            'id' => $text['text_id']])) : $text['translation'];
    }

    private function findText($id_slug)
    {
        foreach ($this->_texts as $item) {
            if ($item['slug'] === $id_slug || $item['text_id'] === $id_slug) {
                return $item;
            }
        }
        return null;
    }

    private function notFound($id_slug)
    {
        $text = '';

        if (!Yii::$app->user->isGuest && preg_match(TextModel::$SLUG_PATTERN, $id_slug)) {
            $text = Html::a(Yii::t('easyii/text/api', 'Create text'), ['/admin/text/a/create',
                'slug' => $id_slug], ['target' => '_blank']);
        }

        return $text;
    }
}