(function($){

	// Menu icon

	$('.menu-icon').click(function(){
		$(this).toggleClass('fa-bars fa-close');
		$('#nav').slideToggle();
	});

	// Search icon

	$('.fa-search').click(function(){
		$('.mobile-search').slideToggle();
	});

	// Owl Carousel

	$('.slideshow').each(function(){
		var autoPlay = $(this).data('autoplay'),
			items = $(this).data('items'),
			singleItem = $(this).data('singleitem');

		console.log( autoPlay , typeof(autoPlay) );
		console.log( singleItem , typeof(singleItem) );
		console.log( items , typeof(items) );

		if ( autoPlay == 0 || autoPlay == false ) {
			autoPlay = false;
		}

		if ( singleItem ) {
			singleItem = true;
		}
		else {
			singleItem = false;
		}

		if ( items == 0 ) {
			items: false
		}

		$(this).owlCarousel({
			singleItem: singleItem,
			autoPlay: autoPlay,
			items: items
		});
	});

})(jQuery);