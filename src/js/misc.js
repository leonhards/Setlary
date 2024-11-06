/* global jQuery */
(function ($) {
	// responsive iframe backup strategy. check _media.scss p iframe
	$("p:has(iframe)").css({
		position: "relative",
		"padding-bottom": "56.25%",
		height: "0",
		overflow: "hidden",
	});

	// Toogle Class background color to header on scroll
	$(function () {
		var _header = $("header.site-header");

		$(window).scroll(function () {
			var _scrollTop = $(window).scrollTop();
			_header.toggleClass("bg-blue", _scrollTop > 20);
		});
	});

	// Show and run video on click section at homepage
	$(function () {
		var _iframe_video =
			'<div class="responsive-video"> ' +
			'<iframe src="https://setlary-jakarta-pub.s3.ap-southeast-3.amazonaws.com/frontend/video/Setlary_Employer_ind_30s.mp4" title="Setlary" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="allowfullscreen"></iframe>' +
			"</div>";

		$(".video-section-bg").click(function () {
			$(this).addClass("showVideo");
			$(".overlay-button").after(_iframe_video);
		});
	});

	// Scrolling parallax for Guy Image
	$(function () {
		var $guy_img = $(".video-section .guy-img");
		$(window).on("scroll", function () {
			var _scroll = $(document).scrollTop();
			$guy_img.css({
				transform: "translateY(" + -0.3 * _scroll + "px)",
			});
		});
	});

	// Scrolling parallax for Girl Image
	$(function () {
		var $girl_img = $(".financial-section .girl-img");
		$(window).on("scroll", function () {
			var _scroll = $(document).scrollTop();
			$girl_img.css({
				transform: "translateY(" + -0.2 * _scroll + "px)",
			});
		});
	});

	// Accordion with 2 columns
	$(function () {
		$(".accordion").click(function (e) {
			$(".collapse").collapse("hide");
		});
	});
})(jQuery);
