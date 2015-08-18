jQuery(document).ready(function($) {
	$('.glowbutton').addClass('dark');
	$('.glowbutton').mouseenter(function() {
		$(this).removeClass('dark');
	});
	$('.glowbutton').mouseleave(function() {
		$(this).addClass('dark');
	});
});
