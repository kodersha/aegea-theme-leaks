<?php // mui ?>

<?php if ($content['pages']['later-href'] and $content['pages']['later-title']): ?>

<div class="frontnav e2-pages later">
    <a href="<?= $content['pages']['later-href'] ?>"><i class="icon-chevron_up"></i></a><br />
    <?php if ($content['pages']['later-jump?']) { ?>...<br /><?php } ?>
</div>

<?php endif ?>
