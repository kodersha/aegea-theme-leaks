<div class="e2-note-form-wrapper">

<form
  action="<?= @$content['form-note-publish']['form-action'] ?>"
  method="post"
>

<input
  type="hidden"
  name="note-id"
  value="<?= @$content['form-note-publish']['.note-id'] ?>" 
/>

<input
  type="hidden"
  id="gmt-offset"
  name="gmt-offset"
  value="unknown"
/>

<script>
d = new Date ()
document.getElementById ('gmt-offset').value = - d.getTimezoneOffset()
</script>

<div class="form">

<div class="form-control">
  <button type="submit" id="submit-button" class="e2-submit-button">
    <?= @$content['form-note-publish']['submit-text'] ?>
  </button>
</div>

</div>

</form>

<?php if (array_key_exists ('only', $content['notes'])) { ?>
<?php if (array_key_exists ('preview-href', $content['notes']['only'])) { ?>
<p class="admin-links"><a href="<?= $content['notes']['only']['preview-href'] ?>"><?= _S ('gs--secret-link') ?></a></p>
<?php } ?>
<?php } ?>

</div>
