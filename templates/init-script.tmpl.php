<script type="text/javascript">
    document.e2 = document.e2 || {}
    document.e2.serverTime = <?= time () ?> 
    document.e2.cookiePrefix = '<?= $content['engine']['cookie-prefix'] ?>'
    <?php if (array_key_exists ('last-modifieds-by-id', $content)) { ?>
        document.e2.noteLastModifiedsById = <?= $content['last-modifieds-by-id'] ?> 
    <?php } ?>
</script>

<?php /* Colorbox */ ?>
<script type="text/javascript">
    $('.e2-text img').click(function() {
        $(this).colorbox({
            href: $(this).attr('src'),
            scalePhotos: 'true',
            width: '1280px',
            scrolling: 'false'
        });
    });
    $(document).ready(function() {$('.e2-text a').attr('target','_blank');});
</script>

<?php /* Предзагрузка страницы */ ?>
<script type="text/javascript">
    var preloader = document.getElementById("preloader_preload");
    function fadeOutnojquery(el) {
        el.style.opacity = 1;
        var interpreloader = setInterval(function() {
            el.style.opacity = el.style.opacity - 0.02;
            if (el.style.opacity <= 0.02) {
                clearInterval(interpreloader);
                preloader.style.display = "none";
            }
        }, 0);
    }
    window.onload = function() {
        setTimeout(function() {
            fadeOutnojquery(preloader);
        }, 0);
    };
</script>

<?php /* Индикатор прокрутки страницы */ ?>
<script type="text/javascript">
    $(window).load(function(){
        $(window).scroll(function() {
        var wintop = $(window).scrollTop(), docheight = $('body').height(), winheight = $(window).height();
        console.log(wintop);
        var totalScroll = (wintop/(docheight-winheight))*100;
        console.log("total scroll" + totalScroll);
        $(".progressBar").css("width",totalScroll+"%");
        });

    });
</script>

<?php /* Плавная подгрузка изображений */ ?>
<script type="text/javascript">
    $(".e2-text-picture-imgwrapper img").each(function() {
        $(this).addClass('lazy');
        $(this).attr('data-original', $(this).attr('src'));
        $(this).removeAttr("src");
    })
</script>
<script type="text/javascript">
    $(function() {
        $("img.lazy").lazyload({
            effect : "fadeIn"
        });
    });
</script>

<?php /* Центрирование изображений */ ?>
<script type="text/javascript">
    $('.e2-text-picture > div').addClass('e2-picture-frame');
</script>

<?php /* Кнопка вверх */ ?>
<script type="text/javascript">
    jQuery.extend(jQuery.fn, {
        toplinkwidth: function(){
            var totalContentWidth = jQuery('').outerWidth();
            var totalTopLinkWidth = jQuery(this).children('a').outerWidth(true);
            var h = jQuery(window).width()/2-totalContentWidth/2-totalTopLinkWidth;
            if(h<0){
                jQuery(this).hide();
                return false;
            } else {
                if(jQuery(window).scrollTop() >= 900){
                    jQuery(this).show();
                }
                return true;
            }
        }
    });

    jQuery(function($){
        var topLink = $('#top-link');
        $(window).scroll(function() {
            if($(window).scrollTop() >= 900 && topLink.toplinkwidth()) {
                topLink.fadeIn(300);
            } else {
                topLink.fadeOut(300);
            }
        });
        topLink.click(function(e) {
            $("body,html").animate({scrollTop: 0}, 1000);
            return false;
        });
    });
</script>