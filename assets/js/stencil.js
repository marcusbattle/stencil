(function($){
	
	// Load images
	$('img').each(function(){
		$(this).attr( 'src', $(this).data('src') );
	});

})(jQuery);