jQuery(document).ready(function(){
	var winHeight;
	var navHeight;
  	var winWidth;
	$(window).load(size).resize(size);
	function size(){
		winHeight = $(window).height();
		navHeight = $('.navbar').height();
		winWidth = $(window).width();	
     // $('.video').height(winHeight - navHeight).width(winWidth);
	}
});