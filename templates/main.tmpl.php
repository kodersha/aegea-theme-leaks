<!DOCTYPE html>
<html>

    <head>

        <?php _LIB ('jquery') ?>
        <?php _LIB ('pseudohover') ?>
        <?php _LIB ('smart-title') ?>

        <e2:head-data />

        <?php _T ('init-script') ?>
        <?php if ($content['sign-in']['done?']) { ?>
        <?php _JS ('local-copies') ?>
        <?php } ?>

        <e2:scripts-data />
        <?= @$content['embed']['pre-head-end'] ?>

        <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i|PT+Serif:400,400i,700,700i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

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

    </body>

    <?php _CSS ('main') ?>
    <?php _CSS ('font') ?>
    <?php _CSS ('colorbox') ?>
    <?php _CSS ('animate') ?>

    <?php _CSS ('lato/latofonts') ?>
    <?php _CSS ('fontello/fontello-codes') ?>
    <?php _CSS ('fontello/fontello-embedded') ?>
    <?php _CSS ('fontello/fontello-ie7-codes') ?>
    <?php _CSS ('fontello/fontello-ie7') ?>
    <?php _CSS ('fontello/fontello') ?>

    <?php _JS ('main') ?>
    <?php _JS ('pace') ?>
    <?php _JS ('colorbox') ?>
    <?php _JS ('avatarme') ?>
    <?php _JS ('button') ?>
    <?php _JS ('lazyload') ?>
    <?php _JS ('wow') ?>

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

    <?php if ($content['sign-in']['done?']) { ?>
    <?php _CSS ('admin') ?>
    <?php _JS ('admin') ?>
    <?php } ?>

</html>

<!-- <?=$content['engine']['version-description']?> -->
