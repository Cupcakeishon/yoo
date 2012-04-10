$(document).ready(function() {
	
	$('.cablera').each(function(){
			$('.step1').click(function(){
				$('.step1').fadeOut(500);
				$('.step2').slideDown(750, 'easeInOutExpo').fadeIn(250);
			});
			$('.return').click(function(){
				$('.step2').slideUp(1000, 'easeOutExpo').fadeOut(250);
				$('.step1').fadeIn(500);
			});
	});
});