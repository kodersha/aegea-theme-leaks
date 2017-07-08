<?php // mui ?>

<?php if ($content['pages']['earlier-href'] and $content['pages']['earlier-title']): ?>

<div class="frontnav e2-pages earlier">
    <?php if ($content['pages']['earlier-jump?']) { ?>...<br /><?php } ?>
    <a href="<?= $content['pages']['earlier-href'] ?>"><i class="icon-chevron_down"></i></a><br />
</div>

<?php endif ?>
