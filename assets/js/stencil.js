(function($){
	
	// Load images
	$('img').each(function(){
		$(this).attr( 'src', $(this).data('src') );
	});

	// Bootstrap enable double click 
	$('a.dropdown-toggle').on('click', function() {

		if ( $(this).parent().hasClass('open') )
			window.location = $(this).attr('href');

	});

	$('.mobile-menu-trigger').on( 'click', function(e) {
		e.preventDefault();
		trigger_menu();
	});

	$('.mobile-menu-overlay').on( 'click', function(e) {
		e.preventDefault();
		trigger_menu();
	});

	window.trigger_menu = function() {

		if ( $('#mobile-menu').hasClass('slide') ) {
			$('#mobile-menu').removeClass('slide');
			$('body').addClass('freeze-page');
			$('.mobile-menu-overlay').fadeIn();
		} else {
			$('#mobile-menu').addClass('slide');
			$('body').removeClass('freeze-page');
			$('.mobile-menu-overlay').fadeOut();
		}

	}

})(jQuery);