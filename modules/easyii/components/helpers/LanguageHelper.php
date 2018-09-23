<?php

namespace yii\easyii\components\helpers;

use yii\base\Model;

/**
 * Class LanguageHelper
 * @package yii\easyii\components\helpers
 */
class LanguageHelper
{
    /**
     * Const allowed languages
     */
    const LANG_UA = 'uk';
    const LANG_EN = 'en-US';

    /**
     * @param string $language
     * @return mixed
     */
    public static function getLanguageSlug($language)
    {
        $languages = [
            self::LANG_UA => 'ua',
            self::LANG_EN => 'en',
        ];

        return $languages[$language];
    }

    /**
     * @return array
     */
    public static function getLanguages()
    {
        return [
            self::LANG_UA => 'Українська',
            self::LANG_EN => 'English',
        ];
    }

    /**
     * @return array
     */
    public static function getShortLanguages()
    {
        return [
            self::LANG_UA => \Yii::t('', 'Ua', null),
            self::LANG_EN => \Yii::t('', 'En', null),
        ];
    }

    /**
     * Checks if field has a suffix "_en", "_ru", etc...
     *
     * @param string $name
     *
     * @return bool
     */
    public static function isMultilingualField($name)
    {
        $langSuffix = substr($name, -3);

        if ($langSuffix !== false) {
            $lang = substr($langSuffix, 1, 2);

            return array_key_exists($lang, static::getLanguages());
        }

        return false;
    }

    /**
     * Returns name and language based on field name,
     * in form of [fieldName, language]
     *
     * @param string $name
     *
     * @return array
     */
    public static function getMultilingualFieldInfo($name)
    {
        return [
            'name' => substr($name, 0, -3),
            'language' => substr($name, -2),
        ];
    }

    /**
     * @param \yii\db\ActiveRecord|Model $model
     * @param                    $fieldId
     *
     * @return string
     */
    public static function getMultilingualFieldLabel($model, $fieldId)
    {
        $field = static::getMultilingualFieldInfo($fieldId);

        return $model->getAttributeLabel($field['name']) . ' ' . strtoupper($field['language']);
    }

    /**
     * Adds language code to each of the localized attribute label
     *
     * @param array $attributeLabels
     * @param array $localizedAttributes
     *
     * @return array
     */
    public static function getLocalizedAttributeLabels(array $attributeLabels, array $localizedAttributes)
    {
        foreach (array_keys(static::getLanguages()) as $lang) {
            foreach ($localizedAttributes as $attribute) {
                if (isset($attributeLabels[$attribute])) {
                    $attributeLabels[$attribute . '_' . $lang] = $attributeLabels[$attribute] . ' ' . strtoupper($lang);
                }
            }
        }

        return $attributeLabels;
    }
}
