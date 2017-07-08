<div class="e2-note-form-wrapper">

<form
  action="<?= @$content['form-note-delete']['form-action'] ?>"
  method="post"
  id="form-note-delete"
>

<input
  type="hidden"
  id="note-id"
  name="note-id"
  value="<?= @$content['form-note-delete']['.note-id'] ?>"
/>

<input
  type="hidden"
  id="is-draft"
  name="is-draft"
  value="<?= @$content['form-note-delete']['.is-draft'] ?>"
/>

<div class="form">

<div class="form-control delete-box">
  <div class="form-element e2-text">
    <p><?= @$content['form-note-delete']['caution-text'] ?></p>
  </div>
  <div class="form-element">
    <button type="submit" id="submit-button" class="e2-delete-button">
      <?= @$content['form-note-delete']['submit-text'] ?>
    </button>
  </div>
</div>

</div>

</form>

<br />

<?php if (array_key_exists ('withdraw-href', $content['form-note-delete'])): ?>
  <a href="<?= $content['form-note-delete']['withdraw-href'] ?>" class="e2-button"><?= _S ('fb--withdraw') ?></a>
<?php endif ?>

</div>
