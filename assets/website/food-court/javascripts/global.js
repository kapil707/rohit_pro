//Add Your Javascript Here

$(document).ready(function () {
	$('.bannerslider').bxSlider({
	  auto: true,
	  mode: 'fade',
	  speed: 700,
	});
});

$(document).ready(function () {

    // Banner slider
    //Function to animate slider captions
    function doAnimations(elems) {
        //Cache the animationend event in a variable
        var animEndEv = 'webkitAnimationEnd animationend';
        elems.each(function () {
            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }

    //Variables on page load
    var $myCarousel = $('#carouselExampleIndicators');
    var $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
    //Initialize carousel
    $myCarousel.carousel();

    //Animate captions in first slide on page load
    doAnimations($firstAnimatingElems);
    //Pause carousel
    $myCarousel.carousel('pause');
    //Other slides to be animated on carousel slide event
    $myCarousel.on('slide.bs.carousel', function (e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });
    $('#carouselExampleIndicators').carousel({
        interval: 2000,
        pause: "true"
    });


});


$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},500);
                    
            }
            
        }); 
    
    });
   
   $(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
  
});

    
});



$(document).ready(function() {

// Looking for a version that also reverses the animation when
// elements scroll below the fold again?

jQuery(function($) {
  
  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function() {
    
    // Calc current offset and get all animatables
    var offset = $(window).scrollTop() + $(window).height(),
        $animatables = $('.animatable');
    
    // Unbind scroll handler if we have no animatables
    if ($animatables.size() == 0) {
      $(window).off('scroll', doAnimations);
    }
    
    // Check all animatables and animate them if necessary
		$animatables.each(function(i) {
       var $animatable = $(this);
			if (($animatable.offset().top + $animatable.height() - 20) < offset) {
        $animatable.removeClass('animatable').addClass('animated');
			}
    });

	};
  
  // Hook doAnimations on scroll, and trigger a scroll
	$(window).on('scroll', doAnimations);
  $(window).trigger('scroll');
  
  
});



// Sticky Header  
function init() {
	window.addEventListener('scroll', function(e){
		var distanceY = window.pageYOffset || document.documentElement.scrollTop,
			shrinkOn = 100,
			header = document.querySelector("header");
		if (distanceY > shrinkOn) {
			classie.add(header,"smaller");
		} else {
			if (classie.has(header,"smaller")) {
				classie.remove(header,"smaller");
			}
		}
	});
}
window.onload = init();


	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

// Wrap every letter in a span
$('.ml3').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: true})
  .add({
    targets: '.ml3 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2250,
    delay: function(el, i) {
      return 150 * (i+1)
    }
  }).add({
    targets: '.ml3',
    opacity: 0,
    duration: 1000,
    easing: "",
    delay: 1000
  });


});


$(document).ready(function () {
		$(function(){
		  $('#portfolio').mixitup({
			targetSelector: '.item',
			transitionSpeed: 450
		  });
		});
	});



$(document).ready(function(){	
	$.jtabber({
		mainLinkTag: ".contact a", // much like a css selector, you must have a 'title' attribute that links to the div id name
		activeLinkClass: "selected", // class that is applied to the tab once it's clicked
		hiddenContentClass: "hiddencontent", // the class of the content you are hiding until the tab is clicked
		showDefaultTab: 1, // 1 will open the first tab, 2 will open the second etc.  null will open nothing by default
		//showErrors: true, // true/false - if you want errors to be alerted to you
		effect: 'fade', // null, 'slide' or 'fade' - do you want your content to fade in or slide in?
		effectSpeed: 'fast' // 'slow', 'medium' or 'fast' - the speed of the effect
	})
});

$(document).ready(function(){
	$('#open-pop-up-1').click(function(e) {
		e.preventDefault();
		$('#pop-up-1').popUpWindow({action: "open"});
	});
});

$( document ).ready(function() {
    $('#popup_this').bPopup();
});
