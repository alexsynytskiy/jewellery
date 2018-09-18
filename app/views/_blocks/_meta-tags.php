<?php
/** \app\assets\AppAsset $asset */
?>

<!-- Meta Tags -->
<meta charset="<?= Yii::$app->charset ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?= \yii\bootstrap\Html::csrfMetaTags() ?>
<meta content="IE=edge" http-equiv="X-UA-Compatible">

<!-- Page Title -->
<title><?= $this->title ?></title>

<!-- Favicon and Apple Touch Icon -->
<link rel="shortcut icon" href="<?= $asset->baseUrl ?>/img/favicon.png" type="image/x-icon">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122963490-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122963490-1');
</script>