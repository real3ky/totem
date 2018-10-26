(function (root, $, undefined) {
	"use strict";

	// $('full-width-row').each( function() {
	// 	var fullWidth = ($(window).width() - 1280) / 2;
	// 	console.log(typeof fullWidth);
	// });

	// $(function () {
	// 	// DOM ready, take it away
	// 	var fullWidth = ($(window).width() - 1280) / 2;
	// 	console.log(fullWidth);
	// });

	function hitTheLink() {
		$(".contentOnModal").on("click", function (e) {
			console.log("shalalal"); // jshint ignore:line
			
			e.preventDefault();
			var $modal = $("#containerReveal");
			var $url = $(this).attr("href");
			$.ajax($url).done(function (resp) {
				$modal.html(resp).foundation("open");
			});
		});
	}

	$(document).ready(function () {
		hitTheLink();
	});

	$(document).ready(function () {
		$(".burger").click(function () {
			var slide = $(this).hasClass("bopen") ? "0" : "-320px";
			$(".nav").animate({
				right: slide,
			}, 300);
		});
	});

	$(document).ready(function () {
		var $howManyToDisplay = 3; 

		function printMore(selector, posts) {
			$("#" + selector + " .elementor-text-editor").append(posts);
		}

		$(".loadmore").click(function () {			
			var $cat = $(this).attr("data-category");
			var $dataContainer = $(this).attr("data-container");
			$.ajax({
				"method": "POST",
				"url": rico_loadmore.ajaxurl, // jshint ignore:line
				"data": { 
					"action": "loadMoreAction",
					"cat": $cat,
					"howmany": $howManyToDisplay 
				},
				"success": function(data) {
					printMore($dataContainer, data);
					hitTheLink();
				},
				"error": function(err) {
					console.log("ERROR", err); // jshint ignore:line
				}
			});

			$howManyToDisplay += 3;

		});
	});

}(this, jQuery));

