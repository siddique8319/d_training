jQuery(document).ready(function($){
    
    // Bootstrap menu fix
    $(".navbar-toggle").click(function(){
        $(".header").css('background', '#000');
    });
    
    
    $(".navbar-nav li a").click(function(){
        $(".navbar-collapse").removeClass('in');
    });
    
    
    // jQuery sticky menu
    $(".header-area").sticky({topSpacing:0});

    // jQuery smooth scroll
    $('.navbar-nav li a, .scroll-to-bottom a').bind('click', function(event) {
        var $anchor = $(this);
        var headerH = '62';
        $('html, body').stop().animate({
            scrollTop : $($anchor.attr('href')).offset().top - headerH + "px"
        }, 1200, 'easeInOutExpo');

        event.preventDefault();
    }); 
    // jQuery scroll psy
    $('body').scrollspy({ 
        target: '.navbar-collapse',
        offset: 95
    }); 
    
    // jQuery counter
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });   
	
	$(".about-slider").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 1,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
	});

    $('.circle').circleProgress({
        value: 0.90,
        size: 100,
        fill: {
            color: ["#30BAE7"]
        }
    });

});