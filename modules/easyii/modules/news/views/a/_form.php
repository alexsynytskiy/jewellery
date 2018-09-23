<?php
/** @var $model yii\easyii\modules\news\models\News */

use yii\easyii\components\helpers\LanguageHelper;
use yii\easyii\helpers\Image;
use yii\easyii\widgets\DateTimePicker;
use yii\easyii\widgets\Redactor;
use yii\easyii\widgets\SeoForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$module = $this->context->module->id;
?>

<?php $form = ActiveForm::begin([
    'enableAjaxValidation' => true,
    'options' => ['enctype' => 'multipart/form-data', 'class' => 'model-form']
]); ?>

<ul class="nav nav-tabs">
    <li class="active">
        <a data-toggle="tab" href="#uk"><?= LanguageHelper::getLanguages()[LanguageHelper::LANG_UA] ?></a>
    </li>
    <li><a data-toggle="tab" href="#en"><?= LanguageHelper::getLanguages()[LanguageHelper::LANG_EN] ?></a></li>
</ul>

<div class="tab-content">
    <div id="uk" class="tab-pane fade in active">
        <br>
        <?= $form->field($model, 'title') ?>

        <?= $form->field($model, 'short')->textarea() ?>

        <?= $form->field($model, 'text')->widget(Redactor::className(), [
            'options' => [
                'minHeight' => 400,
                'imageUpload' => Url::to(['/admin/redactor/upload', 'dir' => 'news']),
                'fileUpload' => Url::to(['/admin/redactor/upload', 'dir' => 'news']),
                'plugins' => ['fullscreen']
            ]
        ]) ?>
    </div>
    <div id="en" class="tab-pane fade">
        <br>
        <?= $form->field($model, 'title_en')->label(LanguageHelper::getMultilingualFieldLabel($model, 'title_en')) ?>

        <?= $form->field($model, 'short_en')->label(LanguageHelper::getMultilingualFieldLabel($model, 'short_en'))->textarea() ?>

        <?= $form->field($model, 'text_en')
            ->label(LanguageHelper::getMultilingualFieldLabel($model, 'text_en'))
            ->widget(Redactor::className(), [
                'options' => [
                    'minHeight' => 400,
                    'imageUpload' => Url::to(['/admin/redactor/upload', 'dir' => 'news']),
                    'fileUpload' => Url::to(['/admin/redactor/upload', 'dir' => 'news']),
                    'plugins' => ['fullscreen']
                ]
            ]) ?>
    </div>
</div>

<?php if (!$model->isNewRecord && $model->category === \yii\easyii\components\helpers\CategoryHelper::CATEGORY_PORTFOLIO) : ?>
    <?php if ($this->context->module->settings['enableThumb']) : ?>
        <?= $form->field($model, 'image')->widget(\kartik\file\FileInput::className(), [
            'options' => [
                'accept' => 'image/*'
            ],
            'pluginOptions' => [
                'showRemove' => false,
                'initialPreview' => [
                    isset($model->image) ? Image::thumb($model->image, 240) : null
                ],
                'initialPreviewAsData' => true,
                'initialPreviewConfig' => [
                    [
                        'url' => Url::to(['/admin/' . $module . '/a/clear-image', 'id' => $model->primaryKey]),
                    ],
                ],
            ]
        ]); ?>
    <?php endif; ?>
<?php endif; ?>

<?= $form->field($model, 'time')->widget(DateTimePicker::className()); ?>

<?php if (IS_ROOT) : ?>
    <?= $form->field($model, 'slug') ?>
    <?= SeoForm::widget(['model' => $model]) ?>
<?php endif; ?>

<?= Html::submitButton(Yii::t('easyii', 'Save'), ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end(); ?>

