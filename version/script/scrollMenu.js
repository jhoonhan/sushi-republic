	$(window).bind('scroll', function (appearMenu) {
		if ($(window).scrollTop() > 100) {
			$('#mainNav').addClass('scrollMainNavActivated', {duration:00});
		} else {
			$('#mainNav').removeClass('scrollMainNavActivated', {duration:00});
		}
	});