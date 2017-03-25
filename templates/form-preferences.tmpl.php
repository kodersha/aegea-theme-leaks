<?php _JS ('form-preferences') ?>

<form
  action="<?= @$content['form-preferences']['form-action'] ?>"
  method="post"
>

<input
  type="hidden"
  id="e2-blog-title-default"
  name="blog-title-default"
  value="<?= @$content['form-preferences']['blog-title-default'] ?>"
/>

<input
  type="hidden"
  id="e2-blog-author-default"
  name="blog-author-default"
  value="<?= @$content['form-preferences']['blog-author-default'] ?>"
/>

<input type="hidden"
  id="template"
  name="template"
  value="<?= $content['form-preferences']['template-name'] ?>"
/>

<div class="form">

<div class="form-control form-control-big">
  <div class="form-label input-label"><label><?= _S ('ff--blog-title') ?></label></div>
  <div class="form-element">
    <input type="text"
      class="text width-4"
      autofocus="autofocus"
      id="blog-title"
      name="blog-title"
      value="<?= $content['form-preferences']['blog-title'] ?>"
    />
    <?php if (!@$content['blog']['userpic-set']) { ?>
    <div class="form-control-sublabel e2-set-userpic-by-dragging">
      <?= _S ('ff--set-userpic-by-dragging') ?>
    </div>
    <?php } ?>
  </div>
</div>

<div class="form-control">
  <div class="form-label input-label"><label><?= _S ('ff--blog-description') ?></label></div>
  <div class="form-element">
    <textarea
      class="width-4 e2-textarea-autosize"
      style="height: 6.66em; min-height: 6.66em; overflow-x: hidden; overflow-y: visible"
      id="blog-description"
      name="blog-description"
    ><?= @$content['form-preferences']['blog-description'] ?></textarea>
  </div>
</div>

<div class="form-control">
  <div class="form-label input-label"><label><?= _S ('ff--blog-author') ?></label></div>
  <div class="form-element">
    <input type="text"
      class="text width-2"
      id="blog-author"
      name="blog-author"
      value="<?= $content['form-preferences']['blog-author'] ?>"
    />
  </div>
</div>

<div class="form-control">
  <div class="form-label input-label"><label><?= _S ('ff--language') ?></label></div>
  <div class="form-element">
    <select name="language" size="1">
      <?php foreach ($content['form-preferences']['languages'] as $value => $lang) { ?>
      <option value="<?= $value ?>"
        <?= $lang['selected?']? 'selected="selected"':'' ?>
      ><?= $lang['display-name'] ?></option>
      <?php } ?>
    </select><br />
  </div>
</div>


<?php if (count (@$content['form-preferences']['templates']) > 1) { ?>
<div class="form-control">
  <div class="form-label">
    <p><label><?= _S ('ff--theme') ?></label></p>
  </div>
  <div class="form-element">

    <noscript>
    <div>
    <i><?= _S ('ff--theme-selector-wants-js') ?></i>
    </div>
    </noscript>

    <div id="e2-template-selector" style="display: none">
    <?php foreach ($content['form-preferences']['templates'] as $template) { ?>
    <div class="
      e2-template-preview<?php if ($template['current?']) echo ' e2-current-template-preview' ?>
    " value="<?= $template['name'] ?>"
    >
      <img src="<?= $template['preview'] ?>" alt="<?= $template['display-name'] ?>"
        width="100" height="120"
      /><br />
      <span class="e2-template-name">
        <a class="e2-pseudolink e2-admin-link" onclick="return false"><?= $template['display-name'] ?></a>
      </span>
    </div>
    <?php } ?>
    </div>
  </div>
</div>
<?php } ?>


<div class="form-control">
  <div class="form-label input-label"><label><?= _S ('ff--posts') ?></label></div>
  <div class="form-element">
    <label><input type="text"
      class="text"
      style="width: 2.33em"
      id="notes-per-page"
      name="notes-per-page"
      maxlength="3"
      value="<?= $content['form-preferences']['notes-per-page'] ?>"
      />
    <?= _S ('ff--items-per-page-after') ?>
    </label>
  </div>
  <div class="form-element">
    <label class="checkbox">
    <input
      type="checkbox"
      id="show-sharing-buttons"
      name="show-sharing-buttons"
      class="checkbox"
      <?= @$content['form-preferences']['show-sharing-buttons?']? ' checked="checked"' : ''?>
    /> <?= _S ('ff--show-sharing-buttons') ?>
    </label><br />
  </div>
</div>

<div class="form-control">
  <div class="form-label"><label><?= _S ('ff--comments') ?></label></div><br />

  <div class="form-element">

    <label class="checkbox">
    <input
      type="checkbox"
      id="comments-default-on"
      name="comments-default-on"
      class="checkbox"
      <?= @$content['form-preferences']['comments-default-on?']? ' checked="checked"' : ''?>
    /> <?= _S ('ff--comments-enable-by-default') ?>
    </label><br />

  </div>

  <div class="form-element">

    <label class="checkbox">
    <input
      type="checkbox"
      id="comments-fresh-only"
      name="comments-fresh-only"
      class="checkbox"
      <?= @$content['form-preferences']['comments-fresh-only?']? ' checked="checked"' : ''?>
    /> <?= _S ('ff--only-for-recent-posts') ?>
    </label><br />

  </div>

  <div class="form-element">

    <label class="checkbox">
    <input
      type="checkbox"
      id="email-notify"
      name="email-notify"
      class="checkbox"
      <?= @$content['form-preferences']['email-notify?']? ' checked="checked"' : ''?>
    /> <?= _S ('ff--send-to-address') ?>
    </label><br />
    <input type="text"
      class="text width-2"
      id="email"
      name="email"
      value="<?= $content['form-preferences']['email'] ?>"
    /><br />

  </div>

</div>

<?php if (@$content['form-preferences']['includes-yandex-metrika?']) { ?>
<div class="form-control">
  <div class="form-label input-label"><label><?= _S ('ff--yandex-metrika') ?></label></div>
  <div class="form-element">
    <textarea
      class="width-4 e2-textarea-autosize"
      style="height: 6.66em; min-height: 6.66em; overflow-x: hidden; overflow-y: visible"
      id="yandex-metrika"
      name="yandex-metrika"
    ><?= $content['form-preferences']['yandex-metrika'] ?></textarea>
  </div>
</div>
<div class="form-control">
  <div class="form-label input-label"><label><?= _S ('ff--google-analytics') ?></label></div>
  <div class="form-element">
    <textarea
      class="width-4 e2-textarea-autosize"
      style="height: 6.66em; min-height: 6.66em; overflow-x: hidden; overflow-y: visible"
      id="google-analytics"
      name="google-analytics"
    ><?= $content['form-preferences']['google-analytics'] ?></textarea>
  </div>
</div>
<?php } ?>

<div class="form-control">
  <div class="form-element">
    <button type="submit" id="submit-button" class="e2-submit-button">
      <?= @$content['form-preferences']['submit-text'] ?>
    </button>
    <span class="e2-keyboard-shortcut"><?= _SHORTCUT ('submit') ?></span>
  </div>
</div>

</div>

</form>

<p class="admin-links"><?= _S ('ff--administration') ?>&nbsp;
<a href="<?= @$content['admin-hrefs']['password'] ?>"><?= _S ('gs--password') ?></a>,&nbsp;
<a href="<?= @$content['admin-hrefs']['database'] ?>"><?= _S ('gs--db-connection') ?></a></p>

<br />

<?php if (array_key_exists ('logout', $content['admin-hrefs'])): ?>
  <form action="<?= $content['admin-hrefs']['logout'] ?>" method="post" style="display: inline-block"><button type="submit"><?= _S ('fb--sign-out') ?></button></form>
<?php endif ?>
