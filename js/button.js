jQuery.extend(jQuery.fn, {
	toplinkwidth: function(){
		var totalContentWidth = jQuery('').outerWidth(); // ширина блока с контентом, включая padding
		var totalTopLinkWidth = jQuery(this).children('a').outerWidth(true); // ширина самой кнопки наверх, включая padding и margin
		var h = jQuery(window).width()/2-totalContentWidth/2-totalTopLinkWidth;
		if(h<0){
			// если кнопка не умещается, скрываем её
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
