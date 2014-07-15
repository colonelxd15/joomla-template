jQuery(document).ready(function(){
	var img = $('<img />');
	img.attr('src', $('.featured-cs').data('image'));
	img.load(function(){
		$('.featured-cs').css('background-image', 'url("' + img.attr('src') + '")');
		img.removeAttr('src');
	});
});