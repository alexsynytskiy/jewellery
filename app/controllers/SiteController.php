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
        \Yii::$app->seo->setTitle('Головна');
        \Yii::$app->seo->setDescription('Ювелирка');
        \Yii::$app->seo->setKeywords('ювелирка, україна');

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
        \Yii::$app->seo->setTitle('Портфоліо');
        \Yii::$app->seo->setDescription('Ювелирка');
        \Yii::$app->seo->setKeywords('ювелирка, україна');

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
        \Yii::$app->seo->setTitle('Профайл');
        \Yii::$app->seo->setDescription('Ювелирка');
        \Yii::$app->seo->setKeywords('ювелирка, україна');

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
        \Yii::$app->seo->setTitle('Контакт');
        \Yii::$app->seo->setDescription('Ювелирка');
        \Yii::$app->seo->setKeywords('ювелирка, україна');

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
