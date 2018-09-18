<?php

use yii\helpers\Url;

$asset = \app\assets\AppAsset::register($this);


$currentPage = Yii::$app->controller->action->id;
$controller = Yii::$app->controller->id;

$contact = '';
$portfolio = '';
$clients = '';
$blog = '';

switch ($controller) {
    case 'portfolio':
        $portfolio = "active";
        break;
    case 'clients':
        $clients = "active";
        break;
    case 'blog':
        $blog = "active";
        break;
    case 'contact':
        $contact = "active";
        break;
}
?>

