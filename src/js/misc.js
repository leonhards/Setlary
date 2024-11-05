/* global jQuery */
(function ($) {
	// responsive iframe backup strategy. check _media.scss p iframe
	$("p:has(iframe)").css({
		position: "relative",
		"padding-bottom": "56.25%",
		height: "0",
		overflow: "hidden",
	});

	$(function () {
		var c = $("header.site-header");
		var d = c.offset().top + 20;

		$(window).scroll(function () {
			var b = $(window).scrollTop();
			c.toggleClass("bg-blue", b > d);
		});
	});
})(jQuery);
