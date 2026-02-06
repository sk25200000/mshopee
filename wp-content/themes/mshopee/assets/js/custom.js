$(document).ready(function(){
	$(document).scroll(function(){
		var scroll = $(window).scrollTop();
		if(scroll > 0){
			$(".header-main").addClass("fixed-header");
		}
		else{
			$(".header-main").removeClass("fixed-header");
		}
	});


  if($(window).scrollTop() > $(".header-main").height()) { 
      $(".header-main").addClass("fixed-header");
  } 
  else {
    $(".header-main").removeClass("fixed-header");  
  }


  $(".nav-toggle").click(function() {
    $(this).toggleClass("active-toggle");
    $("body").toggleClass("no-scroll");
  });



	// Real Time Connected Shopify Website 
	$('.grab-style-inr').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        swipeToSlide: true,
        cssEase: 'ease-in-out',
        asNavFor: '.shopify-web-view',
        focusOnSelect: true,
        speed: 1000,
        autoplay: true,
        arrows: false,
      	dots: false,
      	centerMode: true,
      	centerPadding: '0px',
        variableWidth: true,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 3,
              autoplay: true,
              centerPadding: '10px'
            }
          },
        ]
    });

    $(".shopify-web-view").slick({
        lazyLoad:'ondemand',
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        fade: true,
        autoplay: true,
        autoplaySpeed: 3000,
        cssEase: 'ease-in-out',
        asNavFor: '.grab-style-inr',
        focusOnSelect: true,
        initialSlide: false,
        arrows: false,
        dots: false,
    }); 

    $('.million-brands').slick({
        infinite: false,
        speed: 600,
        slidesToShow: 6,
        slidesToScroll: 1,
        cssEase: 'ease-in-out',
        arrows: true,
        dots: false,
        responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 5
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 599,
          settings: {
            slidesToShow: 2
          }
        }
      ]
    });

    // if(!$(".million-brands").children().hasClass("slick-arrow")) {
    //   $(".million-brands").addClass("no-slider");
    // }


    $('.testimonials-inr .testimonials-lt').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        cssEase: 'ease-in-out',
        arrows: true,
        dots: false
    });

});