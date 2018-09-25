<?php

namespace app\controllers;

use app\components\PublicationsQuery;
use yii\easyii\components\helpers\CategoryHelper;
use yii\easyii\modules\gallery\api\Gallery;
use yii\easyii\modules\page\api\Page;
use yii\easyii\modules\text\api\Text;
use yii\web\Controller;

/**
 * Class SiteController
 * @package app\controllers
 */
class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        \Yii::$app->seo->setTitle(\Yii::t('easyii', 'MAIN'));
        \Yii::$app->seo->setDescription(\Yii::t('easyii', 'Devi Duran - ukrainian jewelry brand inspired by nature. Main page'));
        \Yii::$app->seo->setKeywords('devi, duran', \Yii::t('easyii', 'main'), \Yii::t('easyii', 'page'));

        $gallery = Gallery::cat('slajder-golovna');
        $photos = [];

        if ($gallery) {
            $photos = $gallery->photos();
        }

        return $this->render('index', [
            'photos' => $photos,
        ]);
    }

    /**
     * @return string
     */
    public function actionPortfolio()
    {
        \Yii::$app->seo->setTitle(\Yii::t('easyii', 'PORTFOLIO'));
        \Yii::$app->seo->setDescription(\Yii::t('easyii', 'Devi Duran - ukrainian jewelry brand inspired by nature. Portfolio page'));
        \Yii::$app->seo->setKeywords('devi, duran', \Yii::t('easyii', 'PORTFOLIO'), \Yii::t('easyii', 'page'));

        $works = PublicationsQuery::getList([CategoryHelper::CATEGORY_PORTFOLIO]);

        return $this->render('portfolio', [
            'works' => $works,
        ]);
    }

    /**
     * @return string
     */
    public function actionProfile()
    {
        \Yii::$app->seo->setTitle(\Yii::t('easyii', 'PROFILE'));
        \Yii::$app->seo->setDescription(\Yii::t('easyii', 'Devi Duran - ukrainian jewelry brand inspired by nature. Profile page'));
        \Yii::$app->seo->setKeywords('devi, duran', \Yii::t('easyii', 'PROFILE'), \Yii::t('easyii', 'page'));

        $gallery = Gallery::cat('foto-profajl');
        $photos = [];

        if ($gallery) {
            $photos = $gallery->photos();
        }

        $block1 = Text::get('spikelet-collection');
        $block2 = Text::get('poppy-collection');
        $block3 = Text::get('poppy-moda');

        return $this->render('profile', [
            'block1' => $block1,
            'block2' => $block2,
            'block3' => $block3,
            'photos' => $photos,
        ]);
    }

    /**
     * @return string
     */
    public function actionContact()
    {
        \Yii::$app->seo->setTitle(\Yii::t('easyii', 'CONTACT'));
        \Yii::$app->seo->setDescription(\Yii::t('easyii', 'Devi Duran - ukrainian jewelry brand inspired by nature. Contact page'));
        \Yii::$app->seo->setKeywords('devi, duran', \Yii::t('easyii', 'CONTACT'), \Yii::t('easyii', 'page'));

        $aboutUs = Text::get('contact-about-us');
        $getInTouch = Text::get('get-in-touch');
        $social = Text::get('social');

        return $this->render('contact', [
            'aboutUs' => $aboutUs,
            'getInTouch' => $getInTouch,
            'social' => $social,
        ]);
    }
}
