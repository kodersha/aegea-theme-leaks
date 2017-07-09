<?php /* Генерация буквенных аватар */ ?>
<script type="text/javascript">
    jQuery(function($){
        var $userName = $('.user-name');
        if ($userName.length) {
        $userName.avatarMe({
            avatarClass: 'avatar-me',
            max: 2 // maximum letters displayed in the avartar
            });
        }
    });
</script>