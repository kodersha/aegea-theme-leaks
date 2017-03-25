<div class="comments">
    <div class="content">
        <?php if (array_key_exists ('comments', $content)) { ?>

        <div class="e2-comments">

        <?php if (!array_key_exists ('only', $content['comments'])) { ?>
        <?php _T ('comments-heading'); ?>
        <?php } ?>


        <?php # THE COMMENTS # ?>

        <?php foreach ($content['comments'] as $comment): ?>


        <?php if ($comment['first-new?']) { ?><a name="new"></a><?php } ?>

        <div class="e2-comment-and-reply">

        <div class="<?= $comment['spam-suspect?']? 'e2-spam' : '' ?> <?= $comment['visible?']? '' : 'e2-hidden' ?>">

          <div class="e2-comment e2-comment-control-group">

            <!--
            <?= @$comment['ip-href'] ?>
            -->

            <div class="e2-comment-avatar">
                <span class="user-name"><?= @$comment['name'] ?></span>
            </div>
            <div class="e2-comment-meta-area">

              <span
                class="e2-comment-author"
                title="<?= _DT ('j {month-g} Y, H:i, {zone}', $comment['time']) ?>"
              >
              <span class="e2-markable <?php if (@$comment['important?']) echo 'e2-marked' ?>"><?= @$comment['name'] ?></span>
              </span>

              <span class="e2-comment-actions admin-links">
                <?php if (array_key_exists ('important-toggle-href', $comment)): ?><a href="<?= $comment['important-toggle-href'] ?>" class="nu e2-important-toggle <?= ($comment['important?']? 'e2-toggle-on' : '') ?>"><span class="e2-svgi"><span class="e2-toggle-state-off"><i class="icon-star-empty-1"></i></span><span class="e2-toggle-state-on"><i class="icon-star-4"></i></span><span class="e2-toggle-state-thinking"><?= _SVG ('spin') ?></span></span></a><?php endif ?>
                <!-- <?php if (array_key_exists ('ip-href', $comment)) { ?><small><a href="<?=$comment['ip-href']?>" class="e2-admin-link"><?=$comment['ip']?></small></a><?php } ?>-->
              </span>
              <p class="time"><?= _DT ('j {month-g} Y, H:i', $comment['time']) ?></p>

            </div>

            <div class="e2-comment-content-area">

              <span class="e2-comment-actions-removed admin-links" style="display: none">
                <?php if (array_key_exists ('removed-toggle-href', $comment)): ?>
                <a href="<?= $comment['removed-toggle-href'] ?>" class="nu e2-removed-toggle e2-toggle-on e2-pseudolink"><span class="e2-svgi"><span class="e2-toggle-state-on"><?= _SVG ('replace') ?></span><span class="e2-toggle-state-thinking"><?= _SVG ('spin') ?></span></span></a>
                <?php endif; ?>
              </span>

              <div class="e2-comment-content e2-text">
              <?=@$comment['text']?>
              </div>

            </div>

            <?php if (array_key_exists ('edit-href', $comment) or array_key_exists ('removed-toggle-href', $comment)): ?>
            <div class="e2-comment-control-area">
              <span class="e2-comment-secondary-controls e2-comment-actions admin-links">
                <?php if ($comment['visible?'] and !$comment['replying?'] and array_key_exists ('reply-href', $comment)): ?><span class="admin-icon"><a href="<?= $comment['reply-href'] ?>" class="nu"><span class="e2-svgi"><i class="icon-reply-outline"></i></span></a></span><?php endif; ?>
                <?php if (array_key_exists ('edit-href', $comment)): ?><span class="admin-icon"><a href="<?= $comment['edit-href'] ?>" class="nu"><span class="e2-svgi"><i class="icon-pencil-alt"></i></span></a></span><?php endif ?>
                <?php if (array_key_exists ('removed-toggle-href', $comment)): ?><span class="admin-icon"><a href="<?= $comment['removed-toggle-href'] ?>" class="e2-removed-toggle nu"><span class="e2-svgi"><span class="e2-toggle-state-off"><i class="icon-trash-3"></i></span><span class="e2-toggle-state-thinking"><?= _SVG ('spin') ?></span></span></a></span><?php endif ?>
              </span>

            </div>
            <?php endif ?>

          </div>

          <?php if (@$content['form'] != 'form-comment-reply' and $comment['replied?']) { ?>

          <div class="e2-comment e2-comment-control-group e2-reply">

            <div class="e2-comment-meta-area">
              <div>

              <span
                class="e2-comment-author"
                title="<?= _DT ('j {month-g} Y, H:i, {zone}', @$comment['reply-time']) ?>"
              >
                <span class="e2-markable <?php if (@$comment['reply-important?']) echo 'e2-marked' ?>"><?= @$comment['author-name'] ?></span>
              </span>

              <span class="e2-comment-actions admin-links">
                <?php if (array_key_exists ('reply-important-toggle-href', $comment)): ?><a href="<?= $comment['reply-important-toggle-href'] ?>" class="nu e2-important-toggle <?= ($comment['reply-important?']? 'e2-toggle-on' : '') ?>"><span class="e2-svgi"><span class="e2-toggle-state-off"><?= _SVG ('favourite-off') ?></span><span class="e2-toggle-state-on"><?= _SVG ('favourite-on') ?></span><span class="e2-toggle-state-thinking"><?= _SVG ('spin') ?></span></span></a><?php endif ?>
                <!--<?php if (array_key_exists ('ip-href', $comment)) { ?><small><a href="<?=$comment['ip-href']?>" class="e2-admin-link"><?=$comment['ip']?></small></a><?php } ?>-->
              </span>


              </div>

            </div>


            <div class="e2-comment-content-area">

              <span class="e2-comment-actions-removed admin-links" style="display: none">
                <?php if (array_key_exists ('removed-reply-toggle-href', $comment)): ?>
                <a href="<?= $comment['removed-reply-toggle-href'] ?>" class="nu e2-removed-toggle e2-toggle-on e2-pseudolink"><span class="e2-svgi"><span class="e2-toggle-state-on"><?= _SVG ('replace') ?></span><span class="e2-toggle-state-thinking"><?= _SVG ('spin') ?></span></span></a>
                <?php endif; ?>
              </span>

              <div class="e2-comment-content e2-text" <?= $comment['reply-visible?']? '' : 'style="display: none"' ?>>
              <?=@$comment['reply']?>
              </div>

            </div>

            <?php if (array_key_exists ('edit-reply-href', $comment) or array_key_exists ('removed-reply-toggle-href', $comment)): ?>
            <div class="e2-comment-control-area">
              <span class="e2-comment-secondary-controls e2-comment-actions admin-links">
                <?php if (array_key_exists ('edit-reply-href', $comment)): ?><span class="admin-icon"><a href="<?= $comment['edit-reply-href'] ?>" class="nu"><span class="e2-svgi"><?= _SVG ('edit') ?></span></a></span><?php endif; ?>
                <?php if (array_key_exists ('removed-reply-toggle-href', $comment)): ?><span class="admin-icon"><a href="<?= $comment['removed-reply-toggle-href'] ?>" class="e2-removed-toggle nu"><span class="e2-svgi"><span class="e2-toggle-state-off"><?= _SVG ('trash') ?></span><span class="e2-toggle-state-thinking"><?= _SVG ('spin') ?></span></span></a></span><?php endif; ?>
              </span>
            </div>
            <?php endif ?>

          </div>

          <?php } ?>

        </div>

        </div>

        <?php endforeach ?>

        </div> <!-- e2-comments -->

        <?php } ?>




        <?php # OPEN / CLOSE # ?>

        <?php if (array_key_exists ('comments-toggle', $content)) { ?>
        <div class="e2-comment-toggle">
        <a class="e2-button" href="<?=$content['comments-toggle']['href']?>"><?= $content['comments-toggle']['text'] ?></button></a>
        </div>
        <?php } ?>






        <?php if (array_key_exists ('notes', $content)) { ?>
        <?php if (array_key_exists ('only', $content['notes'])) { ?>
        <?php if ($content['notes']['only']['commentable-now?']) { ?>

          <div class="e2-section-heading"><?= _S ('gs--your-comment') ?></div>

          <?php _T_FOR ('form-comment') ?>

        <?php } ?>
        <?php } ?>
        <?php } ?>
        <script type="text/javascript">
            jQuery(function($){
                var $userName = $('.user-name');
                if ($userName.length) {
                $userName.avatarMe({
                    avatarClass: 'avatar-me',
                    max: 2 // maximum letters displayed in the avartar
                    });
                }
            });
        </script>
    </div>
</div>
