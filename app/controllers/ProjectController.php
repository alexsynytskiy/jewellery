<?php

namespace app\controllers;

use app\components\PublicationsQuery;
use yii\easyii\components\helpers\CategoryHelper;
use yii\easyii\components\helpers\LanguageHelper;
use yii\easyii\modules\news\api\News;
use yii\helpers\ArrayHelper;
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

            $slug = ArrayHelper::getValue(\Yii::$app->request->post(), 'slug');
            $nextValue = ArrayHelper::getValue(\Yii::$app->request->post(), 'nextValue');
            $prevValue = ArrayHelper::getValue(\Yii::$app->request->post(), 'prevValue');

            $project = null;

            if (\Yii::$app->language !== LanguageHelper::LANG_UA) {
                $project = News::get([$slug, 'en']);
            } else {
                $project = News::get([$slug]);
            }

            $projectsCount = count(PublicationsQuery::getList([CategoryHelper::CATEGORY_PORTFOLIO]));

            $projectRenderingData = $this->renderAjax('portfolio-item', [
                'project' => $project,
                'countProjects' => $projectsCount,
                'nextValue' => $nextValue,
                'prevValue' => $prevValue,
            ]);

            return ['status' => 'ok', 'html' => $projectRenderingData];
        } catch (BadRequestHttpException $exception) {
            return $errorResponse;
        } catch (\Exception $exception) {
            return $errorResponse;
        }
    }
}
