<?php if (array_key_exists ('tags', $content['hrefs'])) { ?>

<?php if (count ($content['tags']['menu-each'])) { ?>

<div class="e2-tags">
    <?php if (count ($content['tags']['each']) > 0) { ?>
        <?php if (array_key_exists ('tags', $content['hrefs']) and $content['class'] != 'found') { ?>
            <span class="e2-search-tags">
                <?php if (_AT ($content['hrefs']['tags'])) { ?>
                    <span class="e2-svgi"><i class="icon-tags-2"></i></span>
                <?php } else { ?>
                    <a class="nu" href="<?= $content['hrefs']['tags'] ?>" title="<?= _S ('gs--tags') ?>"><span class="e2-svgi"><i class="icon-tags-2"></i></span></a>
                <?php } ?>
            </span>
        <?php } ?>
    <?php } ?>
    <?php foreach ($content['tags']['menu-each'] as $tag): ?>
        <?php if ($tag['current?']) { ?>
            <?php if ($tag['pinnable?']) { ?>
                <span style="white-space: nowrap"><span class="e2-tag"><?=@$tag['tag']?></span><a href="<?=$tag['pinned-toggle-href']?>" class="nu e2-tag e2-pinned-toggle <?= ($tag['pinned?']? 'e2-toggle-on' : '') ?>"><span class="e2-svgi"><span class="e2-toggle-state-off"><?= _SVG ('pinned-off') ?></span><span class="e2-toggle-state-on"><?= _SVG ('pinned-on') ?></span></span></a></span>
            <?php } ?>
        <?php } else { ?>
            <a href="<?=@$tag['href']?>" class="e2-tag"><?=@$tag['tag']?></a>
        <?php } ?>
    <?php endforeach ?>
</div>

<?php } ?>

<?php } ?>
