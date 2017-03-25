<?php if ($content['class'] == 'found') { ?>

  <div class="e2-heading">

  <?php _T_FOR ('search') ?>

  <?php if (array_key_exists ('search-related-tag', $content)) { ?>
  <div class="e2-heading-see-also">
    <?= _S ('gs--see-also-tag') ?> <a href="<?=$content['search-related-tag']['href']?>" class="e2-tag"><?=$content['search-related-tag']['name']?></a>
  </div>
  <?php } ?>

  </div>

<?php } elseif (array_key_exists ('heading', $content)) { ?>

  <div class="e2-heading">

    <h2><?= $content['heading'] ?></h2>
    <?php if (array_key_exists ('superheading', $content)): ?>
    <div class="e2-heading-super"><?= $content['superheading'] ?> <?= $content['heading'] ?></div>
    <?php endif ?>

    <?php if (array_key_exists ('description', $content['tag'])): ?>
    <div class="e2-heading-description e2-text">
      <?= $content['tag']['description'] ?>
    </div>
    <?php endif ?>

    <span class="admin-links admin-links-floating admin-links-sticky">

      <?php if (array_key_exists ('related-edit-href', $content)): ?>
      <span class="admin-icon"><a href="<?= $content['related-edit-href'] ?>" class="nu e2-edit-link e2-admin-link"><span class="e2-svgi"><?= _SVG ('edit') ?></span></a></span>
      <?php endif ?>

      <?php if (array_key_exists ('related-delete-href', $content)) { ?>
      <span class="admin-icon"><a href="<?= @$content['related-delete-href'] ?>" class="nu e2-admin-link"><span class="e2-svgi"><?= _SVG ('trash') ?></span></a></span>
      <?php } ?>

    </span>

    <?php _T_FOR ('year-months') ?>
    <?php _T_FOR ('month-days') ?>

  </div>

<?php } ?>
