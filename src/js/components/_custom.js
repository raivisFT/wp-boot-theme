document.addEventListener("DOMContentLoaded", function() {

	var $ = jQuery.noConflict(),
		pageUrl = window.location.href,
		page = $('html, body'),
		n = d.getFullYear(),
		win = $(window),
		d = new Date(),
		i = 0;

	// WP Remove <p> tags
	$('div.row p:empty').hide();
			
	$('.foo__copy em').text(n).addClass('foo__copy-year');

	$('.post-edit-link').attr('target','_blank');

	$('.left-tabs--prev').click(function() {
		$(".bpi-tabs--nav").animate({scrollLeft: "-=100px"});
	});
	
	$('.right-tabs--next').click(function() {
		$(".bpi-tabs--nav").animate({scrollLeft: "+=100px"});
	});
});