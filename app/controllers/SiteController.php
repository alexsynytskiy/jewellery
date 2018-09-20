<?php

namespace app\controllers;

use app\components\PublicationsQuery;
use yii\easyii\components\helpers\CategoryHelper;
use yii\easyii\modules\gallery\api\Gallery;
use yii\easyii\modules\page\api\Page;
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

        return $this->render('index', [
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

        return $this->render('portfolio', [
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

        return $this->render('profile', [
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

        return $this->render('contact', [
        ]);
    }
}
