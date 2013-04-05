jQuery(document).ready(function($) {
	
	$('.tooltip_js').tooltip();
	$('.scrollto_js').click(function(e) {
		e.preventDefault();
		$.scrollTo($($(e.currentTarget).attr('href')), 300);
	});
	
}); 