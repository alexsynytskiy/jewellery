<?php
/* @var $countProjects integer */
/* @var $nextValue string */
/* @var $prevValue string */
?>

<div class="project-controls">
    <div>
        <div id="projectNav">
            <?php if ($countProjects > 1): ?>
                <?= $prevValue !== 'first' ?
                    '<span class="prev-project" data-slug="' . $prevValue . '">prev</span>' :
                    '' ?>
                <?= $prevValue !== 'first' && $nextValue !== 'last' ? ' / ' : '' ?>
                <?= $nextValue !== 'last' ?
                    '<span class="next-project" data-slug="' . $nextValue . '">next</span>' :
                    '' ?>
            <?php endif; ?>
        </div>
        <a href="#" id="clear-portfolio">Back to portfolio of work</a>
    </div>
</div>
