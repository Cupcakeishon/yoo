$(document).ready(function() {
	// Just in home
	// ----------------------------------------------------------
	
	if (Modernizr.video){
		var $intro = $('#intro');
		var $logo = $('#logo');
		$('header').find('.wrap').addClass('initial-wrap');
		$logo.addClass('initial-state').show();
		$intro.on('ended', function(){
			$logo.hide().removeClass('initial-state').delay(1000).fadeIn(1000);
			$('header').find('.wrap').removeClass('initial-wrap');
			$intro.fadeOut(500).delay(500).remove();
			$('#slides').superslides({
				play: true,
				slide_easing: 'easeInOutCubic',
				slide_speed: 800,
				nav_class: 'slides-nav'
				});			
			$('#eyecatcher').hide().fadeIn(2000);
			$('#main-menu').slideDown(1000);
		});
	}
	else{
		$('#logo').fadeIn(500);
		console.log('yoo');
	}
	
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
		blockLinksOnDrag: true,
		slideTransitionEasing:"easeInOutElastic",
	}); 
	
	$("#scrollamatic").overscroll();
});