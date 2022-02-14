$(function() {
	$(window).bind('load', function() {	
		$(function(slideshow){
			$("#fadein > div:gt(0)").hide();
			setInterval(function(){
				$('#fadein > div:first')
				.fadeOut(1000)
				.next()
				.fadeIn(1000)
				.end()
				.appendTo('#fadein');}, 
			5000);
		});
	});
});

$(function(){
	$("#fadein2 > div:gt(0)").hide();
		setInterval(function(){
			$('#fadein2 > div:first')
                .fadeOut(2000)
                .next()
                .fadeIn(2000)
                .end()
                .appendTo('#fadein2');}, 
              10000);
        });
