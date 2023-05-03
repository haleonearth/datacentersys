;(function($) {
	const $sidebarSlider = $('.sidebar-slider');

	if ($sidebarSlider.length) {
		$sidebarSlider.slick({
			autoplay: true,
			autoplaySpeed: 2000,
			arrows: true,
			dots: true,
			adaptiveHeight: true
		});
	}
})(jQuery);
