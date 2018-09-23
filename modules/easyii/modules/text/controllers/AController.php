<?php

namespace yii\easyii\modules\text\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\easyii\components\Controller;
use yii\easyii\modules\text\models\Text;
use yii\widgets\ActiveForm;

class AController extends Controller
{
    public $rootActions = ['create', 'delete'];

    public function actionIndex()
    {
        $data = new ActiveDataProvider([
            'query' => Text::find(),
        ]);
        return $this->render('index', [
            'data' => $data
        ]);
    }

    public function actionCreate($slug = null)
    {
        $model = new Text;

        if ($model->load(Yii::$app->request->post())) {
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }

            if ($model->save()) {
                $this->flash('success', Yii::t('easyii/text', 'Text created'));
                return $this->redirect(['/admin/' . $this->module->id]);
            }

            $this->flash('error', Yii::t('easyii', 'Create error. {0}', $model->formatErrors()));
            return $this->refresh();
        }

        if ($slug) {
            $model->slug = $slug;
        }

        return $this->render('create', [
            'model' => $model
        ]);
    }

    public function actionEdit($id)
    {
        $model = Text::find()->where(['text_id' => $id])->multilingual()->one();

        if ($model === null) {
            $this->flash('error', Yii::t('easyii', 'Not found'));
            return $this->redirect(['/admin/' . $this->module->id]);
        }

        if ($model->load(Yii::$app->request->post())) {
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }

            if ($model->save()) {
                $this->flash('success', Yii::t('easyii/text', 'Text updated'));
            } else {
                $this->flash('error', Yii::t('easyii', 'Update error. {0}', $model->formatErrors()));
            }
            return $this->refresh();
        }

        return $this->render('edit', [
            'model' => $model
        ]);
    }

    /**
     * @param $id
     * @return mixed
     * @throws \Exception
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDelete($id)
    {
        if (($model = Text::findOne($id))) {
            $model->delete();
        } else {
            $this->error = Yii::t('easyii', 'Not found');
        }
        return $this->formatResponse(Yii::t('easyii/text', 'Text deleted'));
    }
}