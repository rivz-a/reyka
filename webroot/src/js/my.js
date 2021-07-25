var isMobile = false;
	
if( navigator.userAgent.match(/Android/i) || 
	navigator.userAgent.match(/webOS/i) ||
	navigator.userAgent.match(/iPhone/i) || 
	navigator.userAgent.match(/iPad/i)|| 
	navigator.userAgent.match(/iPod/i) || 
	navigator.userAgent.match(/BlackBerry/i)){
	isMobile = true;
}

function mobileNav() {	
    
}
function parallaxInit() {
    if (isMobile == true) return false;
    $('.parallax-bg').each(function() {
        $(this).bgparallax();
    });
}

function animated_contents() {
    $(".animated:not(.onAnimate):appeared").each(function (i) {
        var $this    = $(this),
            animated = $(this).data('animated'),
            delay = 300;
            
        $this.addClass('onAnimate'); 
      
        if($this.data('delay')) delay = parseInt($this.data('delay'));
        setTimeout(function () {
            $this.addClass(animated);
        }, delay * i);
  
    });
}

function parallaxHeader() {
	
	var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: "200%"}});
	
	var tween = TweenMax.to(".wrap-main-slider .slide-bg", .5, {
				y: "80%",
				blur: 10,
				ease: Linear.easeNone,
				a:20, 
				onUpdate: applyBlur
			});
			
	var blurElement = {a:0};//start the blur at 0 pixels

	var blurTween = TweenMax.to(blurElement, 0.5, {a:20, onUpdate:applyBlur});
	
	//here you pass the filter to the DOM element
	function applyBlur() {
		var blurX = blurElement.a;
		if(blurX) blurX -= 9;
	    TweenMax.set(".wrap-main-slider .slide-bg", {webkitFilter:"blur(" + blurX + "px)",filter:"blur(" + blurX + "px)"});  
	};
	
	new ScrollMagic.Scene({triggerElement: ".wrap-main-slider"})
					.setTween(tween)
					.addTo(controller);	

	new ScrollMagic.Scene({triggerElement: ".wrap-main-slider"})
					.setTween(blurTween)
					.addTo(controller);	
}

$(document).ready(function(){	
    mobileNav();  
	
    parallaxInit(); 
	
	parallaxHeader();		
	
	if (isMobile == true) {
		$('body').addClass('mobile');
		$('.animated').removeClass('animated');
	} 
	else {
            $('*[data-animated]').addClass('animated');
            animated_contents();
            $(window).scroll(function () {
                animated_contents();
            });
	}
});