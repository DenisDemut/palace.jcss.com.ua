$(document).ready(function() {
	$('article').readmore();

	if ((window.location.href.indexOf("category") != -1) || 
		(window.location.href.indexOf("blog") != -1) || 
		(window.location.href.indexOf("glass") != -1)) {
		$('.info-section').css({'display': 'none'});
	}
	/*if (window.location.href.indexOf("blog") != -1) {
		$('.info-section').css({'display': 'none'});
	}
	if (window.location.href.indexOf("glass") != -1) {
		$('.info-section').css({'display': 'none'});
	}*/

});