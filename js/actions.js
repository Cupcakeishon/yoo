$(document).ready(function() {

	if (Modernizr.cssanimations) {
		console.log('animaciones on');
		Modernizr.load('js/polyfills/jquery.animate-enhanced.min.js');
		console.log('animate-enhanced on');
	}
	else{console.log('animaciones off');}
	
	if (Modernizr.svg) {
		console.log('svg on');
	}
	
	if (Modernizr.placeholder) {console.log('placeholder on');}
	else{
		console.log('placeholder off');
		Modernizr.load('js/polyfills/placeholder-support.min.js');
	}
	
	
	$('#slides').superslides({
		play: true,
		slide_easing: 'easeInOutCubic',
		slide_speed: 800,
		nav_class: 'slides-nav'
	})
	var menu = $('#main-menu');
	$('#eyecatcher').live('inview', function (event, visible) {
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
	$("#scrollamatic").overscroll();
});