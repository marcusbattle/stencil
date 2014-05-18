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

})(jQuery);