<?php if (!array_key_exists ('form', $content)) { ?>

    <div class="
        <?php if ($content['class'] == 'found') { ?>e2-search-frame<?php } ?>
        <?php if ($content['class'] != 'found') { ?>e2-search-front<?php } ?>
    ">
        <span class="e2-search">

            <form
                id="e2-search"
                class="e2-enterable"
                action="<?= @$content['search']['form-action'] ?>"
                method="post"
                accept-charset="utf-8"
            >
                <label class="e2-search-input">
                    <input class="e2-search-input-input text" type="text" name="query" id="query" value="<?= @$content['search']['query'] ?>" />
                    <div class="e2-search-icon">
                        <i class="icon-magnifying"></i>
                    </div>
                </label>
            </form>

        </span>
    </div>

<?php } ?>