<?php
/* @var $countProjects integer */
/* @var $nextValue string */
/* @var $prevValue string */
?>

<div class="project-controls clearfix">
    <div>
        <div id="projectNav">
            <?php if ($countProjects > 1): ?>
                <?= $prevValue !== 'first' ?
                    '<span class="prev-project" data-slug="' . $prevValue . '">' .
                    Yii::t('easyii', 'prev') . '</span>' :
                    '' ?>
                <?= $prevValue !== 'first' && $nextValue !== 'last' ? ' / ' : '' ?>
                <?= $nextValue !== 'last' ?
                    '<span class="next-project" data-slug="' . $nextValue . '">' .
                    Yii::t('easyii', 'next') . '</span>' :
                    '' ?>
            <?php endif; ?>
        </div>
        <a href="#" id="clear-portfolio"><?= Yii::t('easyii', 'Back to portfolio of work') ?></a>
    </div>
</div>
