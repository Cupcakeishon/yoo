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
			menu.slideUp(10).removeClass('sticky').slideDown(10);
		} else {
			menu.slideUp(0).addClass('sticky').slideDown(250);
		}
	});
	
	$('#main-nav').children('li').each(function(index){
		if($(this).children('ul').length >= 1){
			$(this).addClass('dropdown');
		};
	});
	
	// Just in home
	// ----------------------------------------------------------
	
	$('#slides').superslides({
		play: true,
		slide_easing: 'easeInOutCubic',
		slide_speed: 800,
		nav_class: 'slides-nav'
	})
	
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
		preloadNearbyImages:true, 
		controlNavEnabled: false,
		directionNavEnabled: false,
		directionNavAutoHide: false,
		controlNavEnabled: true,
		welcomeScreenEnabled:false,
		imageAlignCenter:true,
		slideshowEnabled: false,
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
		blockLinksOnDrag: true,
		slideTransitionEasing:"easeInOutElastic",
		afterSlideChange: function(){
		}			
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
		transitionInEasing: 'easeInOutExpo'
	});
	
	$('.faq').find('li').children('span').click(function(){
	    if(false == $(this).next().is(':visible')) {
	        $('.faq').find('div').slideUp(300);
	    }
	    $(this).next().slideToggle(300);
	});
});