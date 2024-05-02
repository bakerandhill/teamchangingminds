jQuery(document).ready(function($){
	
	// Open and close mobile Nav
	$('.btn-nav.open').click(function(e){
		e.preventDefault();
		$('.nav-global').animate( { left: '0' } );
	});
	
	$('.btn-nav.close').click(function(e){
		e.preventDefault();
		$('.nav-global').animate( { left: '-100vw' } );
	});

});