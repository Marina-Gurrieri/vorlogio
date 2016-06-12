$('.owl-nuovo').owlCarousel({
	loop:false,
	nav:false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 3000,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		1000:{
			items:4
		}
	}
});
$('.owl-nuovo').owlCarousel({
	loop:false,
	nav:false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 3000,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		1000:{
			items:4
		}
	}
});
$('.owl-marques').owlCarousel({
	loop:true,
	responsive:{
		0:{
			items:2
		},
		600:{
			items:4
		},
		1000:{
			items:6
		}
	}
});

$(document).ready(function(){
	$('.buitoni-ricerca').on( "click", function() {
		$('.ricerca').fadeToggle();
	});
});
