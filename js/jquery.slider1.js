jQuery(document).ready(function(){
	$('.carousel-nav.left').click(function(){
		$('.carousel-container .car-contents:last-child').prependTo('.carousel-container');
		$('.carousel-container').css('margin-left','-100%');
		$('.carousel-container').animate({'margin-left':'0'});
	});
	$('.carousel-nav.right').click(function(){
		$('.carousel-container').animate({'margin-left':'-100%'},function(){
		$('.carousel-container .car-contents:first-child').appendTo('.carousel-container');
		$('.carousel-container').css('margin-left','0px');});
		
	});	
});
