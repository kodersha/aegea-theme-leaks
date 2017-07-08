<div class="e2-note-form-wrapper">

<?php _LIB ('ajaxupload') ?>
<?php _JS ('form-tag') ?>
<?php _JS ('text-with-file-upload') ?>

<form
  action="<?= @$content['form-tag']['form-action'] ?>"
  method="post"
>                                   

<input
  type="hidden"
  name="tag-id"
  value="<?= @$content['form-tag']['.tag-id'] ?>" 
/>

<input
  type="hidden"
  id="formatter-id"
  name="formatter-id"
  value="<?= @$content['form-tag']['.formatter-id'] ?>"
/>

<input
  type="hidden"
  name="preserved-uploads"
  value="<?= @$content['form-tag']['.preserved-uploads'] ?>"
/>

<input
  type="hidden"
  name="cache-sensitive-hash"
  value="<?= @$content['form-tag']['.cache-sensitive-hash'] ?>"
/>

<a id="e2-file-upload-action" href="<?= $content['form-tag']['form-file-upload-action'] ?>"></a>
<a id="e2-file-remove-action" href="<?= $content['form-tag']['form-file-remove-action'] ?>"></a>

<div class="form">

<div class="form-control form-control-big">
  <div class="form-label input-label"><label><?= _S ('ff--tag-name') ?></label></div>
  <div class="form-element">
    <input type="text"
      class="text big required width-2"
      autofocus="autofocus"
      id="tag"
      name="tag"
      value="<?= @$content['form-tag']['tag'] ?>"
    />
  </div>
</div>

<div class="form-control">
  <div class="form-label input-label"><label><?= _S ('ff--tag-urlname') ?></label></div>
  <div class="form-element">
    <input type="text"
      class="text required width-2"
      id="urlname"
      name="urlname"
      value="<?= @$content['form-tag']['urlname'] ?>"
    />
  </div>
</div>

<div class="form-control">
  <div class="form-subcontrol">

    <div class="form-label form-label-sticky input-label">
      <label>
        <?= _S ('ff--tag-description') ?>
        <a href="http://blogengine.ru/help/text/" target="_blank" class="nu e2-admin-link"><span class="e2-svgi"><?= _SVG ('help') ?></span></a>
      </label>
    </div>

    <div class="form-element">
      <textarea name="description"
        class="required e2-text-textarea e2-textarea-autosize e2-external-drop-target e2-external-drop-target-textarea e2-external-drop-target-altable full-width"
        id="text"
        autocomplete="off"
        style="height: 25.2em; min-height: 25.2em; overflow-x: hidden; overflow-y: visible"
      ><?=$content['form-tag']['description']?></textarea>
    </div>
  </div>

  <div class="form-subcontrol">

    <div class="form-element">
      <div id="e2-uploaded-image-prototype" class="e2-uploaded-image" style="display: none">
        <div style="position: relative">
          <a class="e2-uploaded-image-remover nu" href=""><span class="e2-svgi"><?= _SVG ('remove-pic') ?></span></a>
          <a class="e2-uploaded-image-preview" href="javascript:return(false)"><img src="" alt="" /></a>
        </div>
      </div>
      
      <div id="e2-uploaded-images">
      <?php foreach ($content['form-tag']['uploads'] as $image) { ?><div class="e2-uploaded-image"><span class="e2-uploaded-image-preview"><img src="<?= $image['href'] ?>" alt="<?= $image['original-filename'] ?>" width="<?= $image['width'] ?>" height="<?= $image['height'] ?>" /></span></div><?php } ?>
      </div>

      <p id="e2-upload-controls" class="e2-upload-controls admin-links" style="display: none"><a href="javascript:" id="e2-upload-button" class="nu"><span class="e2-svgi"><?= _SVG ('attach') ?></span></a></span><span id="e2-uploading" style="display: none"><?= _SVG ('spin-progress') ?></span><br /></p>

      <p class="e2-upload-error" id="e2-upload-error-unsupported-file" style="clear: left; display: none"><?= _S ('er--unsupported-file') ?></p>
      <p class="e2-upload-error" id="e2-upload-error-cannot-create-thumbnail" style="clear: left; display: none"><?= _S ('er--cannot-create-thumbnail') ?></p>
      <p class="e2-upload-error" id="e2-upload-error-cannot-upload" style="clear: left; display: none"><?= _S ('er--cannot-upload') ?></p>
    </div>

  </div>

</div>

<div class="form-control">
  <div class="form-element">
    <button type="submit" id="submit-button" class="e2-submit-button">
      <?= @$content['form-tag']['submit-text'] ?>
    </button>
    <span class="e2-keyboard-shortcut"><?= _SHORTCUT ('submit') ?></span>
  </div>
</div>

</div>

</form>

</div>