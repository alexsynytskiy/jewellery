<?php
/* @var $this yii\web\View */
/* @var $works yii\easyii\modules\news\api\NewsObject[] */

$asset = \app\assets\AppAsset::register($this);

$baseUrl = $asset->baseUrl;

$worksCount = count($works);
?>

<section id="page">
    <!-- CATEGORY NAV -->

    <div id="projectPages"></div>

    <?php if (count($works) > 0): ?>
        <div id="projectThumbs">
            <div class="wrapper sqs-gallery-design-autocolumns" id="yui_3_17_2_1_1537367486882_130">
                <?php for ($i = 0; $i < $worksCount; $i++):
                    $next = $i + 1;
                    $prev = $i - 1;

                    $prev = $prev >= 0 ? $works[$prev]->slug : 'first';
                    $next = $next < $worksCount ? $works[$next]->slug : 'last';
                ?>
                    <a class="project sqs-gallery-design-autocolumns-slide positioned project-small-item"
                       href="<?= $works[$i]->slug ?>" data-next-item="<?= $next ?>" data-prev-item="<?= $prev ?>">
                        <div>
                            <div class="project-image">
                                <div class="intrinsic">
                                    <div class="content-fill">
                                        <img alt="<?= $works[$i]->image ?>" class="loaded"
                                             src="<?= $works[$i]->image ?>?format=500w">
                                    </div>
                                </div>
                                <div class="project-item-count"><?= $i ?></div>
                            </div>
                            <div class="project-title"><?= $works[$i]->title ?></div>
                        </div>
                    </a>
                <?php endfor; ?>
            </div>
        </div>
    <?php endif; ?>
</section>

<?php
$pageOptions = \yii\helpers\Json::encode([
    'startBlockUrl' => '/project/get-project/',
]);

$this->registerJs('PortfolioPage(' . $pageOptions . ')');
?>

