$(document).ready(function() {

	/**
	* Header
	*/

	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();
	    if (scroll >= 100) {
	        $("header").addClass("scroll");
	    } else {
	    	$("header").removeClass("scroll");
	    }
	});

	$(document).ready(function() {
		setTimeout(function(){
			$('.loader').fadeOut();
		}, 3000);
	}); 

	$(document).ready(function(){
		$('#nav-icon1').click(function(){
			$(this).toggleClass('open');
			$('.m-menu-hldr').toggleClass('open');
		});
	});

	/**
	* Homepage
	*/

	$('.partner-slider').slick({
	 	infinite: true,
		slidesToShow: 5,
		slidesToScroll:1,
		// autoplay: true,
		speed: 500,
		arrows: true,
		dots: false,
		// prevArrow: $('.prev-arrow'),
	//   			nextArrow: $('.next-arrow'),
			responsive: [
	        {
	          breakpoint: 1100,
	          settings: {
	            slidesToShow: 3,
	            slidesPerRow: 1,
	            slidesToScroll: 1
	          }
	        },
	        {
	          breakpoint: 700,
	          settings: {
	            slidesToShow: 1,
	            slidesPerRow: 1,
	            slidesToScroll: 1,
	            arrows:false
	          }
	        }

	    ]

	  });

	/**
	* Guide Page
	*/

	new Vue({
	    el: '#tabs',
	    data: { activetab: 1 },
	});


	/**
	* For Post
	*/
	$('.restrict').each(function() {
		var txt= $(this).text();
		if(txt.length > 50)
	    $(this).text(txt.substring(0,50) + '...');
    });



	
});