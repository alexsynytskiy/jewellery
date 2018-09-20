<?php

namespace app\controllers;

use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\Response;

/**
 * Class ProjectController
 * @package app\controllers
 */
class ProjectController extends Controller
{
    /**
     * @return array
     * @throws \Throwable
     */
    public function actionGetProject()
    {
        $errorResponse = ['status' => 'error', 'message' => 'Щось пішло не так..'];

        if (!\Yii::$app->mutex->acquire('multiple-get-project')) {
            \Yii::info('Пользователь попытался запросить много проектов за один раз');

            return $errorResponse;
        }

        try {
            \Yii::$app->response->format = Response::FORMAT_JSON;

            if (!\Yii::$app->request->isPost) {
                throw new BadRequestHttpException();
            }

            $request = \Yii::$app->request;
            $token = $request->post(\Yii::$app->request->csrfParam, '');

            if (!\Yii::$app->request->validateCsrfToken($token)) {
                throw new BadRequestHttpException();
            }



            return ['status' => 'error', 'message' => 'Проект не знайдено'];
        } catch (BadRequestHttpException $exception) {
            return $errorResponse;
        } catch (\Exception $exception) {
            return $errorResponse;
        }
    }
}
