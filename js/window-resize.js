jQuery(document).ready(function(){
	var winHeight;
	var navHeight;
	$(window).load(size).resize(size);
	function size(){
		winHeight = $(window).height();
		navHeight = $('.navbar').height();
		$('#home-landing img').height(winHeight - navHeight);
	}
});