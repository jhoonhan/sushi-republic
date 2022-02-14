	$(window).bind('scroll', function () {
		if ($(window).scrollTop() > 120) {
			$('.scrollMobileNav').addClass('scrollMobileNavAction', {duration:500});
		} else {
			$('.scrollMobileNav').removeClass('scrollMobileNavAction', {duration:500});
		}
	});