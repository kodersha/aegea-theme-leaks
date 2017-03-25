<div class="e2-hints">
    <i class="icon-keyboard-1"></i>
    <?php if ($content['pages']['later-href'] and $content['pages']['later-title']): ?>
        <div class="e2-hint later">
            <span class="e2-keyboard-shortcut"><?= _SHORTCUT ('navigation-later') ?> - <?= $content['pages']['later-title'] ?></span>
            <?php if ($content['pages']['later-jump?']) { ?>...<br /><?php } ?>
        </div>
    <?php endif ?>
    <?php if ($content['pages']['earlier-href'] and $content['pages']['earlier-title']): ?>
        <div class="e2-hint earlier">
            <?php if ($content['pages']['earlier-jump?']) { ?>...<br /><?php } ?>
            <span class="e2-keyboard-shortcut"><?= _SHORTCUT ('navigation-earlier') ?> - <?= $content['pages']['earlier-title'] ?></span>
        </div>
    <?php endif ?>
</div>
