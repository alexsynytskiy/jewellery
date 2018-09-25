<?php

namespace yii\easyii\modules\feedback\controllers;

use Yii;
use yii\easyii\modules\feedback\models\Feedback as FeedbackModel;

/**
 * Class SendController
 * @package yii\easyii\modules\feedback\controllers
 */
class SendController extends \yii\web\Controller
{
    /**
     * @return \yii\web\Response
     */
    public function actionIndex()
    {
        $model = new FeedbackModel;

        $request = Yii::$app->request;

        if ($model->load($request->post())) {

            $returnUrl = $request->post('successUrl');

            if ($model->save()) {
                \Yii::$app->session->setFlash('success', \Yii::t('easyii', 'Thank you! We will message you as soon as possible!'));
            } else {
                $returnUrl = $request->post('errorUrl');
                \Yii::$app->session->setFlash('danger', \Yii::t('easyii', 'Something went wrong.. Try again later'));
            }

            return $this->redirect($returnUrl);
        }

        return $this->redirect(Yii::$app->request->baseUrl);
    }
}