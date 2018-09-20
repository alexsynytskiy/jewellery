<?php

/* @var $this yii\web\View */

$asset = \app\assets\AppAsset::register($this);

$baseUrl = $asset->baseUrl;
?>

<section id="page" role="main" data-content-field="main-content">
    <!-- CATEGORY NAV -->

    <div class="sqs-layout sqs-grid-12 columns-12" data-type="page" data-updated-on="1512388658142"
         id="page-57ebea79f7e0abae9fb77471">
        <div class="clearfix"></div>
        <div class="row sqs-row">
            <div class="col sqs-col-5 span-5">
                <div class="sqs-block html-block sqs-block-html" data-block-type="2"
                     id="block-586e494d601611b6f93e">
                    <div class="sqs-block-content"><h1>About Us</h1>
                        <p>
                            <span style="font-size:22px">We’re a sociable team. So we like to get out and about to see our clients – we’re more than happy to sit down and discuss a project over coffee or a bite to eat. If you’d like to meet up, talk through a project or find out more, feel free to get in touch.</span>
                        </p>
                        <p>&nbsp;</p>
                        <h1>GET IN TOUCH</h1>
                        <p><a target="_blank" href="mailto:hello@intsign.co">HELLO@INTSIGN.CO</a>&nbsp; &nbsp;<a
                                    target="_blank" href="tel:+380632720813">+380 63 272 0813</a>&nbsp; &nbsp;<a
                                    target="_blank" href="tel:+447477458480">+44 7477 458 480</a></p>
                        <p>&nbsp;</p>
                        <h1>Social&nbsp;</h1>
                        <p><a target="_blank" href="http://instagram.com/intsign.co">INSTAGRAM</a>&nbsp; &nbsp;<a
                                    target="_blank" href="https://www.facebook.com/Intsign/">FACEBOOK</a>&nbsp;
                            &nbsp;<a target="_blank" href="https://vk.com/intelligentdesign">VK</a></p></div>
                </div>
            </div>
            <div class="col sqs-col-7 span-7">
                <div class="sqs-block form-block sqs-block-form" data-block-type="9"
                     id="block-b07dc257fa287274d6a1">
                    <div class="sqs-block-content">
                        <div class="form-wrapper">
                            <div class="form-inner-wrapper">
                                <form autocomplete="on" action="/" method="POST">
                                    <div class="field-list clear">
                                        <fieldset id="name-yui_3_17_2_3_1475078484425_4660" class="form-item fields name required">
                                            <div class="title">Your Name <span class="required">*</span></div>
                                            <legend>Your Name</legend>

                                            <div class="field first-name">
                                                <label class="caption"><input class="field-element field-control"
                                                                              name="fname"
                                                                              type="text" spellcheck="false"
                                                                              maxlength="30" data-title="First">
                                                    First Name</label>
                                            </div>
                                            <div class="field last-name">
                                                <label class="caption"><input class="field-element field-control"
                                                                              name="lname"
                                                                              type="text" spellcheck="false"
                                                                              maxlength="30" data-title="Last">
                                                    Last Name</label>
                                            </div>
                                        </fieldset>

                                        <div id="email-yui_3_17_2_3_1475078484425_4661"
                                             class="form-item field email required">
                                            <label class="title" for="email-yui_3_17_2_3_1475078484425_4661-field">Your
                                                e-mail Address <span class="required">*</span></label>

                                            <input class="field-element" name="email"
                                                   type="text" spellcheck="false"
                                                   id="email-yui_3_17_2_3_1475078484425_4661-field">
                                        </div>

                                        <div id="textarea-yui_3_17_2_3_1475078484425_4663"
                                             class="form-item field textarea required">
                                            <label class="title"
                                                   for="textarea-yui_3_17_2_3_1475078484425_4663-field">Describe
                                                Your Idea... <span class="required">*</span></label>

                                            <textarea class="field-element "
                                                      id="textarea-yui_3_17_2_3_1475078484425_4663-field"
                                                      style="margin-top: 6px; margin-bottom: 4px; height: 100px;"></textarea>
                                        </div>

                                    </div>

                                    <div class="form-button-wrapper form-button-wrapper--align-right">
                                        <input class="button sqs-system-button sqs-editable-button" type="submit" value="SEND">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row sqs-row mt-15">
            <div class="col sqs-col-5 span-5">
                <div class="sqs-block html-block sqs-block-html" id="block-205f68599c2489bc6a7e">
                    <div class="sqs-block-content">
                        <h1><strong>Our LOCATION</strong></h1>
                        <p>Pavla Tychyny Ave, 1<br>Silver Breeze, office A<br>Kyiv, 02000<br>Ukraine</p>
                    </div>
                </div>
            </div>
            <div class="col sqs-col-7 span-7 map">
                <div id="map-canvas"></div>
            </div>
        </div>
    </div>
</section>

<?php
$pageOptions = \yii\helpers\Json::encode([
    'coordinates' => [
        '50.453818', '30.623036'
    ],
    'icon' => $asset->baseUrl.'/img/map-marker.png',
]);

$this->registerJs("MapPage({$pageOptions});");
?>