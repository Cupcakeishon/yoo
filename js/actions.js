$(document).ready(function() {

	// All
	// -------------------------------------------------------
	
	if (Modernizr.cssanimations) {
		Modernizr.load('js/polyfills/jquery.animate-enhanced.min.js');
	}
	
	if (Modernizr.placeholder) {console.log('placeholder on');}
	else{
		Modernizr.load('js/polyfills/placeholder-support.min.js');
	}
	
	
	var menu = $('#main-menu');
	$('#eyecatcher').on('inview', function (event, visible) {
		if (visible == true) {
			menu.removeClass('sticky');
		} else {
			menu.addClass('sticky');
		}
	});
	
	$('#main-nav').children('li').each(function(index){
		if($(this).children('ul').length >= 1){
			$(this).addClass('dropdown');
		};
	});
	
	// Just in home
	// ----------------------------------------------------------
	
	
	$(".noticias-wrap, .paquetes-wrap").royalSlider({
		controlNavEnabled: false,
		directionNavEnabled: false,
		directionNavAutoHide: false,
		welcomeScreenEnabled:false,
		imageAlignCenter:true,
		imageScaleMode:"fit",
		minSlideOffset: 20,
		blockLinksOnDrag: true,
		slideTransitionEasing:"easeInOutElastic"			
	});  
	
	$("#apps-banners").royalSlider({
		preloadNearbyImages:false, 
		controlNavEnabled: false,
		directionNavEnabled: false,
		directionNavAutoHide: false,
		controlNavEnabled: true,
		welcomeScreenEnabled:false,
		imageAlignCenter:false,
		slideshowEnabled: true,
		slideshowDelay:4000,
		slideshowAutoStart:true,  
		imageScaleMode:"fit",
		captionAnimationEnabled: true,
		captionShowEffects:["fade","moveleft"],
		captionMoveOffset:20,
		captionShowSpeed:400,
		captionShowEasing:"easeOutCubic",
		captionShowDelay:200, 
		minSlideOffset: 20,
		slideTransitionEasing:"easeInOutElastic",
		blockLinksOnDrag: true
	}); 
	
	$("#scrollamatic").overscroll();
	
	// Just inside
	// -------------------------------------------------------
	
	$("#mejor-experiencia").royalSlider({
		controlNavEnabled: true,
		directionNavEnabled: false,
		directionNavAutoHide: false,
		welcomeScreenEnabled:false,
		imageAlignCenter:true,
		imageScaleMode:"fit",
		minSlideOffset: 20,
		blockLinksOnDrag: true,
		slideTransitionEasing:"easeInOutElastic"			
	});
	
	$('.tabbed-content').easytabs({
		animationSpeed: 	250,
		transitionInEasing: 'easeInOutExpo',
		cache: false,
		updateHash:false
	});
	
	$(".carousel").jCarouselLite({
	    btnNext : ".carouselnext",
	    btnPrev : ".carouselprev",
	    auto    : 10000,
	    easing  : 'easeInOutBack', 
	    speed	: 1000
	});
	
	$('.faq').find('li').children('span').click(function(){
	    if(false == $(this).next().is(':visible')) {
	        $('.faq').find('div').slideUp(300);
	    }
	    $(this).next().slideToggle(300);
	});
});