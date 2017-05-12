<div id="preloader">
    <div id="preloader_preload"></div>
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
</div>
</div>

<?php if ($content['class'] == 'note') { ?>
    <?php _T ('comments') ?>
<?php } ?>

<?php /* if ($content['class'] == 'frontpage') { ?>
    <div class="common quote">
        <div class="content">
            <?php _T ('quote') ?>
        </div>
    </div>
<?php } */ ?>

<div class="common">
    <div class="footer">
        <?php if ($content['class'] != 'found') { ?>
            <?php _T_FOR ('search') ?>
        <?php } ?>
        <div class="copyright">
            <?php _X ('footer-pre') ?>
            <span id="e2-blog-author"><?= @$content['blog']['author'] ?></span> © <?=$content['blog']['years-range']?>
            <a class="e2-rss" href="<?=@$content['blog']['rss-href']?>"><?= _S ('gs--rss') ?></a>
        </div>

        <?php # please do not remove: #?>
        <div class="engine">
            <?= $content['engine']['about'] ?>
            <?php if ($content['sign-in']['done?']) { ?>
                <span title="<?= _S ('gs--pgt') ?>"><?=$content['engine']['pgt']?> <?= _S ('gs--seconds-contraction') ?></span>
            <?php } ?>
            / <a href="https://github.com/sasha-travkina/blogengine-themes-leaks" target="_blank" class="e2-tag sponsored">Шаблон Leaks</a>
        </div>

        <div class="counter">

        </div>

        <?php _T ('login-element'); ?>
        <?php _X ('footer-post') ?>
    </div>

</div>

<div id="top-link">
	<a href="#top"><i class="icon-up-open-big"></i></a>
</div>
