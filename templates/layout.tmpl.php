<div id="preloader">
    <div id="preloader_preload"></div>
</div>

<div class="progressContainer">
	<div class="progressBar"></div>
</div>

<div class="common <?php if ($content['class'] == 'frontpage') { ?>frontpage<?php } ?>">

    <div class="flag">
        <?php _X ('header-pre') ?>
        <div class="spotlight">
            <span class="admin-links admin-links-floating">
                <?php _T ('author-menu') ?>
            </span>
        </div>

        <?php if ($content['class'] != 'note') { ?>
            <div class="logo">
                <?php _T ('user-picture') ?>
            </div>
            <div class="title">
                <h1>
                    <?= _A ('<a href="'. $content['blog']['href']. '"><span id="e2-blog-title">'. $content['blog']['title']. '</span></a>') ?>
                </h1>
            </div>
        <?php } ?>
        <?php if ($content['class'] == 'note') { ?>
            <div class="e2-back">
                <a href="<?php $content['blog']['href'] ?>">В блог</a>
            </div>
        <?php } ?>
        <?php _X ('header-post') ?>
    </div>

    <div class="content">
        <?php if ($content['class'] != 'note') { ?>
            <?php _T ('tags-menu') ?>
        <?php } ?>
        <?php _T ('heading') ?>
        <?php _T ('message') ?>
        <?php _T ('welcome') ?>
        <?php _T ('drafts') ?>
        <?php _T ('notes') ?>
        <?php _T ('notes-list') ?>
        <?php _T ('tags') ?>
        <?php _T ('nothing') ?>
        <?php _T ('sessions') ?>
        <?php _T ('pages') ?>
        <?php _T ('popular') ?>
        <?php _T ('unsubscribe') ?>
        <?php _T ('form') ?>
    </div>

    <?php if ($content['class'] == 'note') { ?>
        <?php _T ('comments') ?>
    <?php } ?>

    <?php /* if ($content['class'] == 'frontpage') { ?>
        <?php _T ('quote') ?>
    <?php } */ ?>

    <div class="footer">
        <?php if ($content['class'] != 'found') { ?>
            <?php _T_FOR ('search') ?>
        <?php } ?>
        <div class="copyright">
            <?php _X ('footer-pre') ?>
            <span id="e2-blog-author"><?= @$content['blog']['author'] ?></span> © <?=$content['blog']['years-range']?> / <a class="e2-blog-rss" href="<?=@$content['blog']['rss-href']?>">RSS</a> / <?php _T ('login-element'); ?>
            <div class="e2-blog-description"><?= $content['blog']['description'] ?></div>
        </div>

        <?php # please do not remove: #?>
        <div class="engine">
            <?= $content['engine']['about'] ?>
            / <span title="<?= _S ('gs--pgt') ?>"><?=$content['engine']['pgt']?> <?= _S ('gs--seconds-contraction') ?></span>
            / <a target="_blank" href="https://github.com/sasha-travkina/blogengine-themes-leaks" class="e2-tag sponsored">Шаблон Leaks</a>
        </div>

        <?php /* Место для счетчика */ ?>
        <div class="counter">

        </div>

        <?php _X ('footer-post') ?>
    </div>

    <div id="top-link">
        <a href="#top"><i class="icon-chevron_up"></i></a>
    </div>

</div>