<?php

namespace yii\easyii\modules\text\models;

use omgdef\multilingual\MultilingualBehavior;
use omgdef\multilingual\MultilingualQuery;
use Yii;
use yii\easyii\behaviors\CacheFlush;
use yii\easyii\components\helpers\LanguageHelper;

class Text extends \yii\easyii\components\ActiveRecord
{
    const CACHE_KEY = 'easyii_text';

    /**
     * @return MultilingualQuery
     */
    public static function find() {
        return new MultilingualQuery(get_called_class());
    }

    public static function tableName()
    {
        return 'easyii_texts';
    }

    public function rules()
    {
        return [
            ['text_id', 'number', 'integerOnly' => true],
            ['text', 'required'],
            ['text', 'trim'],
            ['title', 'string'],
            ['slug', 'match', 'pattern' => self::$SLUG_PATTERN,
                'message' => Yii::t('easyii', 'Slug can contain only 0-9, a-z and "-" characters (max: 128).')],
            ['slug', 'default', 'value' => null],
            ['slug', 'unique']
        ];
    }

    public function attributeLabels()
    {
        return [
            'text' => Yii::t('easyii', 'Text'),
            'title' => Yii::t('easyii', 'Title'),
            'slug' => Yii::t('easyii', 'Slug'),
        ];
    }

    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            'multilingual' => [
                'class' => MultilingualBehavior::className(),
                'languages' => LanguageHelper::getLanguages(),
                'defaultLanguage' => Yii::$app->language,
                'langForeignKey' => 'text_id',
                'tableName' => 'text_i18n',
                'attributes' => [
                    'text', 'title'
                ],
            ],
            CacheFlush::className()
        ]);
    }
}