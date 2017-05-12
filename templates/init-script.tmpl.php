<script type="text/javascript">
    document.e2 = document.e2 || {}
    document.e2.serverTime = <?= time () ?> 
    document.e2.cookiePrefix = '<?= $content['engine']['cookie-prefix'] ?>'
    <?php if (array_key_exists ('last-modifieds-by-id', $content)) { ?>
        document.e2.noteLastModifiedsById = <?= $content['last-modifieds-by-id'] ?> 
    <?php } ?>
</script>

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

<script type="text/javascript">
    $(".e2-text-picture-imgwrapper img").each(function() {
        $(this).addClass('lazy');
        $(this).attr('data-original', $(this).attr('src'));
        $(this).removeAttr("src");
    })
    $("img.lazy").lazyload({
    });
</script>

<script type="text/javascript">
    var wow = new WOW(
        {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       -200,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
        callback:     function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null // optional scroll container selector, otherwise use window
        }
    );
    wow.init();
</script>

<script type="text/javascript">
    $('.e2-text-picture > div').addClass('e2-picture-frame');
</script>