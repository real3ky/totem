(function( root, $, undefined ) {
	"use strict";
	// $(document).ready(function(){
	// 	$(document).foundation();
	// });
	// $('full-width-row').each( function() {
	// 	var fullWidth = ($(window).width() - 1280) / 2;
	// 	console.log(typeof fullWidth);
	// });

	// $(function () {
	// 	// DOM ready, take it away
	// 	var fullWidth = ($(window).width() - 1280) / 2;
	// 	console.log(fullWidth);
	// });

$(document).ready(function(){
	$(".contentOnModal").click(function(e) {
		e.preventDefault();
		var $modal = $("#containerReveal");
		var $url = $(this).attr("href");
		$.ajax($url).done(function(resp){
			$modal.html(resp).foundation("open");
		});
	});
});

} ( this, jQuery ));

