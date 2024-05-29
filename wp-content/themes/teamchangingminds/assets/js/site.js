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



function reveal() {
	var reveals = document.querySelectorAll(".reveal");
	for (var i = 0; i < reveals.length; i++) {
		var windowHeight = window.innerHeight;
		var elementTop = reveals[i].getBoundingClientRect().top;
		var elementVisible = 150;
		if (elementTop < windowHeight - elementVisible) {
		reveals[i].classList.add("active");
		} else {
		reveals[i].classList.remove("active");
		}
	}
}

window.addEventListener("scroll", reveal);