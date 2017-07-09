<?php
    if (
        array_key_exists ('admin-hrefs', $content) and (
            array_key_exists ('new-note', $content['admin-hrefs']) or
            array_key_exists ('drafts', $content['admin-hrefs'])
        )
    ):
?>

    <span class="admin-menu admin-links" id="e2-author-menu">

        <?php # SETTINGS # ?>
        <?php if (array_key_exists ('settings', $content['admin-hrefs'])) { ?>
            <span class="admin-icon">
                <?=
                _A (
                    '<a href="'. $content['admin-hrefs']['settings'] .'" class="nu"><span class="e2-svgi"><i class="icon-settings"></i></span></a>'
                )
                ?>
            </span>
        <?php } ?>

        <?php # DRAFTS # ?>
        <?php if (array_key_exists ('drafts', $content['admin-hrefs'])) { ?>

            <span class="admin-icon" id="e2-drafts-item"
                <?= ((
                    array_key_exists ('drafts-count', $content['blog']) and
                    $content['blog']['drafts-count'] > 0
                    )? '' : ' style="display: none"') ?>
            >
                <span id="e2-drafts" title="<?= _S ('ln--drafts') ?> (<?= $content['blog']['drafts-count'] ?>)">
                    <?=
                        _A (
                            '<a href="'. $content['admin-hrefs']['drafts'] .'" class="nu"><span class="e2-svgi"><i class="icon-reorder_square_line"></i></span></a>'
                        )
                    ?>
                    <span class="e2-unsaved-led" style="display: none"></span>
                </span>
            </span>
        <?php } ?>

        <?php # COMMENTS # ?>
        <?php if (array_key_exists ('new-comments', $content)) { ?>
            <span class="admin-icon admin-menu-comments">
                <a class="nu admin-menu-comments-count" href="<?= @$content['new-comments']['href'] ?>"><?= (int) $content['new-comments']['count'] ?></a>
            </span>
        <?php } ?>

        <?php # NEW # ?>
        <?php if (_AT ($content['admin-hrefs']['new-note'])) { ?>
            <span class="admin-icon e2-admin-menu-new-selected" title="<?= _S ('ln--new-post') ?>"><span class="e2-svgi"><i class="icon-plus"></i></span></span>
            <span class="admin-icon e2-admin-menu-new" style="display: none" title="<?= _S ('ln--new-post') ?>"><a href="<?= $content['admin-hrefs']['new-note'] ?>" class="nu"><span class="e2-svgi"><i class="icon-plus"></i></span></a></span>
        <?php } else { ?>
            <span class="admin-icon e2-new-note-item" title="<?= _S ('ln--new-post') ?>" id="e2-new-note-item"><a href="<?= $content['admin-hrefs']['new-note'] ?>" class="nu"><span class="e2-svgi"><i class="icon-plus"></i></span></a><span class="e2-unsaved-led" style="display: none"></span></span>
        <?php } ?>

    </span>

<?php endif ?>