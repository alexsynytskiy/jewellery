<?php

namespace yii\easyii\modules\feedback\api;

use Yii;
use yii\easyii\modules\feedback\models\Feedback as FeedbackModel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/**
 * Feedback module API
 * @package yii\easyii\modules\feedback\api
 *
 * @method static string form(array $options = []) Returns fully worked standalone html form.
 * @method static array save(array $attributes) If you using your own form, this function will be useful for manual saving feedback's.
 */
class Feedback extends \yii\easyii\components\API
{
    const SENT_VAR = 'feedback_sent';

    private $_defaultFormOptions = [
        'errorUrl' => '',
        'successUrl' => ''
    ];

    public function api_form($options = [])
    {
        $model = new FeedbackModel;
        $options = array_merge($this->_defaultFormOptions, $options);

        ob_start();
        $form = ActiveForm::begin([
            'action' => Url::to(['/admin/feedback/send']),
            'options' => [
                'autocomplete' => 'on',
                'enctype' => 'multipart/form-data'
            ],
            'fieldConfig' => [
                'template' => "<div class=\"form-group\">{input}</div>",
                'options' => [
                    'tag' => false,
                ],
            ],
        ]);

        echo Html::hiddenInput('errorUrl', $options['errorUrl'] ? $options['errorUrl'] : Url::current([self::SENT_VAR => 0]));
        echo Html::hiddenInput('successUrl', $options['successUrl'] ? $options['successUrl'] : Url::current([self::SENT_VAR => 1]));

        echo '<div class="field-list clear">
                <fieldset id="name-yui_3_17_2_3_1475078484425_4660" class="form-item fields name required">
                    <div class="title">Your Name <span class="required">*</span></div>
                    <legend>Your Name</legend>
        
                    <div class="field first-name">
                        <label class="caption">';

        echo $form->field($model, 'name')->textInput([
            'class' => 'field-element field-control',
            'id' => 'first-name',
            'spellcheck' => false
        ]);

        echo 'First Name</label>
            </div>
            <div class="field last-name">
                <label class="caption">';

        echo $form->field($model, 'surname')->textInput([
            'class' => 'field-element field-control',
            'id' => 'last-name',
            'spellcheck' => false
        ]);

        echo 'Last Name</label></div>
            </fieldset>
    
            <div id="email-yui_3_17_2_3_1475078484425_4661"
                 class="form-item field email required">
                <label class="title" for="email-yui_3_17_2_3_1475078484425_4661-field">Your
                    e-mail Address <span class="required">*</span></label>';

        echo $form->field($model, 'email')->input('email', [
            'class' => 'field-element',
            'id' => 'email-yui_3_17_2_3_1475078484425_4661-field',
            'spellcheck' => false
        ]);

        echo '</div>
                <div id="textarea-yui_3_17_2_3_1475078484425_4663"
                     class="form-item field textarea required">
                    <label class="title"
                           for="textarea-yui_3_17_2_3_1475078484425_4663-field">Describe
                        Your Idea... <span class="required">*</span></label>';

        echo $form->field($model, 'text')->textarea([
            'class' => 'field-element',
            'id' => 'textarea-yui_3_17_2_3_1475078484425_4663-field',
        ]);

        echo '</div></div>';

        echo '<div class="form-button-wrapper form-button-wrapper--align-right">';
        echo Html::submitButton('SEND', ['class' => 'button sqs-system-button sqs-editable-button']);
        echo '</div>';

        ActiveForm::end();

        return ob_get_clean();
    }

    public function api_save($data)
    {
        $model = new FeedbackModel($data);
        if ($model->save()) {
            return ['result' => 'success'];
        }

        return ['result' => 'error', 'error' => $model->getErrors()];
    }
}
