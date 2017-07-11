<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">

        <?php _LIB ('jquery') ?>
        <?php _LIB ('pseudohover') ?>
        <?php _LIB ('smart-title') ?>

        <e2:head-data />

        <?php if ($content['sign-in']['done?']) { ?>
            <?php _JS ('local-copies') ?>
        <?php } ?>

        <?= @$content['embed']['pre-head-end'] ?>

        <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">

    </head>

    <body <?php if (@$content[$content['form']]['form-file-upload-action']) { ?>class="e2-external-drop-target e2-external-drop-target-body e2-external-drop-target-altable"<?php } ?>>

        <?php _T_FOR ('form-install') ?>
        <?php _T_FOR ('form-login') ?>

        <?php if (@$content['blog']['show-subscribe-button?']) { ?>
            <?php _X ('subscribe-sheet') ?>
        <?php } ?>

        <?php if ($content['engine']['installed?']) { ?>
            <?php _T ('layout'); ?>
        <?php } ?>

        <?= @$content['embed']['pre-body-end'] ?>
        <e2:scripts-data />

        <?php /* Стили */ ?>
        <?php _CSS ('main') ?>
        <?php _CSS ('lightbox') ?>

        <?php /* Шрифты */ ?>
        <?php _CSS ('font') ?>
        <?php _CSS ('lato/latofonts') ?>
        <?php _CSS ('mfglabsiconset/mfglabs_iconset') ?>

        <?php /* Общие скрипты */ ?>
        <?php _JS ('lightbox') ?>
        <?php _JS ('lazyload') ?>
        <?php _JS ('pace') ?>
        <?php _T ('init-script') ?>

        <?php /* Скрипты главной страницы */ ?>
        <?php if ($content['class'] != 'note') { ?>
            <?php _JS ('readmore') ?>
            <?php _T ('main-script') ?>
        <?php } ?>

        <?php /* Скрипты страницы топика */ ?>
        <?php if ($content['class'] == 'note') { ?>
            <?php _JS ('avatarme') ?>
            <?php _JS ('textmistake') ?>
            <?php _T ('note-script') ?>
        <?php } ?>

        <?php if ($content['sign-in']['done?']) { ?>
            <?php _CSS ('admin') ?>
            <?php _JS ('admin') ?>
        <?php } ?>

    </body>

</html>

<!-- <?=$content['engine']['version-description']?> -->