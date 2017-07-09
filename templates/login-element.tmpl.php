<?php if (!$content['sign-in']['done?'] and !$content['sign-in']['necessary?']) { ?>
    <a class="e2-visual-login nu" id="e2-visual-login" href="<?= $content['hrefs']['sign-in'] ?>">
        <span class="e2-admin-link e2-svgi">
            <i class="icon-lock"></i>
        </span>
    </a>
<?php } ?>