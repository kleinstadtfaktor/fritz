/* Globales Theme-JavaScript (läuft nach jQuery und Bootstrap). */
(function ($) {
	'use strict';

	$(function () {
		// Externe Links sicher öffnen.
		$('a[href^="http"]:not([href*="' + window.location.hostname + '"])')
			.attr('target', '_blank')
			.attr('rel', 'noopener noreferrer');

		// Navbar nach Scroll schattieren (Beispiel für jQuery-Nutzung).
		$(window).on('scroll', function () {
			var $nav = $('.navbar');
			if ($(window).scrollTop() > 10) {
				$nav.addClass('shadow-sm');
			} else {
				$nav.removeClass('shadow-sm');
			}
		});
	});
})(jQuery);
