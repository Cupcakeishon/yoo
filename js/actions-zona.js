$(document).ready(function() {
	$('.step1').click(function(e){
		var i = $(this).index('.step1');
		// console.log(i);
		$('.step1').eq(i).fadeOut(500);
		$('.step2').eq(i).slideDown(750, 'easeInOutExpo').fadeIn(250);
	});
	$('.return').click(function(){
		var i = $(this).index('.return');
		// console.log(i);
		$('.step2').eq(i).slideUp(1000, 'easeOutExpo').fadeOut(250);
		$('.step1').eq(i).fadeIn(500);
	});
});