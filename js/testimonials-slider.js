;(function($) {
	const $testimonialsSlider = $('.testimonials-slider');

	if ($testimonialsSlider.length) {
		$testimonialsSlider.slick({
			autoplay: true,
			autoplaySpeed: 4000,
			arrows: true,
			dots: true,
			adaptiveHeight: true
		});
	}
})(jQuery);
