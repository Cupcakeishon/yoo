$(document).ready(function() {
	$('#slides').superslides({
		play: true,
		slide_easing: 'easeInOutCubic',
		slide_speed: 800,
		nav_class: 'slides-nav'
	})
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
	
	$(".noticias-wrap").royalSlider({
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
		afterSlideChange: function(){
		}			
	}); 
	$("#scrollamatic").overscroll();
});