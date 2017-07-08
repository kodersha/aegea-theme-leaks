<?php _JS ('notes') ?>

<?php if (@$content['pages']['timeline?']) _T ('pages-later') ?>

<?php foreach ($content['notes'] as $note): ?>

    <?php _X ('note-pre') ?>

    <div id="e2-note-<?= $note['_']['_id'] ?>" class="<?= array_key_exists ('only', $content['notes'])? 'e2-only ': '' ?>e2-note <?= $note['favourite?']? 'e2-note-favourite' : '' ?> <?= $note['visible?']? '' : 'e2-hidden' ?> <?= $note['playlist?']? 'jouele-playlist' : '' ?><?php if ($content['class'] != 'note') { ?> wow fadeIn<?php } ?>">

        <span class="admin-links admin-links-floating admin-links-sticky">

            <?php if (array_key_exists ('edit-href', $note)): ?>

                <span class="admin-icon"><a href="<?= $note['edit-href'] ?>" class="nu <?php if (array_key_exists ('only', $content['notes'])) {?>e2-edit-link<?php } ?>"><span class="e2-svgi"><i class="icon-pen"></i></span></a><span class="e2-unsaved-led" style="display: none"></span></span>
                    <?php if (array_key_exists ('favourite-toggle-href', $note)) { ?>
                        <span class="admin-links admin-icon"><a href="<?= $note['favourite-toggle-href'] ?>" class="nu e2-favourite-toggle <?= ($note['favourite?']? 'e2-toggle-on' : '') ?> e-2-toggle-thinking">
                            <span class="e2-svgi"><span class="e2-toggle-state-off"><i class="icon-fire"></i></span><span class="e2-toggle-state-on"><i class="icon-fire"></i></span><span class="e2-toggle-state-thinking"><?= _SVG ('spin') ?></span></span></a></span>
                            <?php } ?>

                        </span>
                    <?php endif ?>

                </span>

                <article id="post" class="<?php if ($content['class'] != 'note') { ?>e2-note-short<?php } ?>">

                    <?php // TITLE // ?>
                    <h1 class="<?= $note['published?']? 'e2-published' : 'e2-draft' ?> e2-smart-title">
                        <?php if (@$note['favourite?'] and !$content['sign-in']['done?']) { ?>
                            <?= _A ('<a href="'. $note['href']. '"><span class="favourite">'. $note['title']. '</span></a>') ?>
                            <?php } else { ?>
                                <?= _A ('<a href="'. $note['href']. '">'. $note['title']. '</a>') ?>
                                <?php } ?>
                                <?php if (!$note['published?']) { ?><span class="e2-draft-label"><?= _S ('gs--not-published') ?></span><?php }?>
                            </h1>


                            <?php // TEXT // ?>

                            <div class="e2-note-text e2-text <?= $note['published?']? 'e2-published' : 'e2-draft' ?>">
                                <?=@$note['text']?>
                            </div>

                        </article>

                        <?php // THUMBS // ?>

                        <?php if (array_key_exists ('thumbs', $note) and (count ($note['thumbs']))) { ?>
                            <div class="e2-search-thumb">
                                <a href="<?= $note['href'] ?>" class="nu">
                                    <?php foreach ($note['thumbs'] as $x) { ?><img src="<?= $x['href'] ?>" width="<?= $x['width'] ?>" height="<?= $x['height'] ?>" class="e2-search-results-image <?php if ($x['highlighted?']) { ?>e2-search-results-image-highlighed<?php } ?> <?php if ($note['has-highlighted-thumbs?'] and !$x['highlighted?']) { ?>e2-search-results-image-dimmed<?php } ?>" /><?php } ?>
                                </a>
                            </div>
                        <?php } ?>

                            <?php // LIST OF KEYWORDS // ?>

                            <div class="e2-actions">

                                <?php if ($content['class'] != 'frontpage') { ?>
                                    <?php if (array_key_exists ('tags', $note)): ?>
                                        <div class="e2-note-tags">
                                            <?php
                                            $tags = array ();
                                            foreach ($note['tags'] as $tag) {
                                                if ($tag['current?']) {
                                                    $tags[] = '<span class="e2-tag e2-marked">'. $tag['name'] .'</span>';
                                                } else {
                                                    $tags[] = '<a href="'. $tag['href'] .'" class="e2-tag">'. $tag['name'] .'</a>';
                                                }
                                            }
                                            echo implode ('', $tags)

                                            ?>
                                        </div>
                                    <?php endif; ?>
                                <?php } ?>

                                <?php // COMMENTS LINK // ?>

                                <div class="e2-note-comments-link">
                                    <span class="e2-timestamp" title="<?=_DT ('j {month-g} Y, H:i, {zone}', @$note['time'])?> (<?=_DT ('j {month-g} Y, H:i, {zone}', @$note['last-modified'])?>)"><?=_DT ('j {month-g} Y, H:i', @$note['time'])?></span><br />
                                    <?php if ($note['comments-link?']): ?>
                                        <?php if ($note['comments-count']) { ?><a href="<?= $note['href'] ?>#e2-comments-count"><?= $note['comments-count-text'] ?></a><?php if ($note['new-comments-count'] == 1 and $note['comments-count'] == 1) { ?>, <?= _S ('gs--comments-all-one-new') ?><?php } elseif ($note['new-comments-count'] == $note['comments-count']) { ?>, <?= _S ('gs--comments-all-new') ?><?php } elseif ($note['new-comments-count']) { ?> · <span class="admin-links"><a href="<?=$note['href']?>#new"><?= $note['new-comments-count-text'] ?></a></span>
                                        <?php } ?>
                                        <?php } else { ?>
                                            <a href="<?= $note['href'] ?>"><?= _S ('gs--no-comments') ?></a>
                                            <?php } ?>
                                        </div>
                                    <?php endif ?>
                                </div>

                                </div>

                                <?php if ($content['class'] == 'note') { ?>
                                    <div class="e2-likes-action">

                                <?php // LIKES // ?>

                                <?php if (array_key_exists ('only', $content['notes'])) { ?>
                                    <?php if ($note['published?']) { ?>

                                        <div class="e2-note-likes">

                                            <?php if (@$content['blog']['show-subscribe-button?']) { ?>
                                                <a id="e2-note-subscribe-button" class="e2-note-subscribe-button" href="<?= @$content['blog']['rss-href'] ?>" ><?= _S ('gs--subscribe-to-blog') ?></a>
                                                <?php } ?>

                                                <?php if ($note['shareable?']) { ?>

                                                    <?php _LIB ('likely') ?>

                                                    <div class="likely" data-url="<?= $note['href-original'] ?>" data-title="<?= strip_tags ($note['title']) ?>">

                                                        <?php foreach ($note['share-to'] as $network => $network_info) { ?>
                                                            <?php if ($network_info['share?']) { ?>
                                                                <?php
                                                                $additional = '';
                                                                if ($network_info['data']) {
                                                                    foreach ($network_info['data'] as $k => $v) {
                                                                        $additional .= ' data-'. $k .'="'. $v .'"';
                                                                    }
                                                                }
                                                                ?>

                                                                <div class="<?= $network ?>" <?= $additional ?>><?= _S ('sn--'. $network .'-verb') ?></div>

                                                                <?php } ?>
                                                                <?php } ?>

                                                            </div>

                                                            <?php } ?>
                                                        </div>

                                                        <?php } ?>
                                                        <?php } ?>
                                                </div>
                                            <?php } ?>




                                                        <?php _X ('note-post') ?>

                                                    <?php endforeach ?>

                                                    <?php if (@$content['pages']['timeline?']) _T ('pages-earlier') ?>
