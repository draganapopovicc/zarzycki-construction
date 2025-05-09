jQuery(document).ready(function ($) {
	// Mobile navigation
	$(".menu-toggle").click(function () {
		$(".main-navigation_wrap").fadeToggle();
		$(this).toggleClass("menu-open");

		$(this).hasClass("menu-open")
			? $("body").css("overflow", "hidden")
			: $("body").css("overflow", "auto");
	});

	// Sub Menu Trigger
	$(".sub-menu-trigger").click(function () {
		$(this).parent().toggleClass("sub-menu-open");
		$(this).siblings(".sub-menu").slideToggle();
	});

	//Sticky header
	function headerSticky() {
		var $stickyElement = $(".header-main");
		var headerHeight = $stickyElement.outerHeight();

		if ($(window).scrollTop() >= headerHeight) {
			headerHeight = $stickyElement.outerHeight();
			$stickyElement.addClass("sticky-header");
		} else {
			headerHeight = $stickyElement.outerHeight();
			$stickyElement.removeClass("sticky-header");
		}
	}

	$(window).on("scroll load", function () {
		headerSticky();
	});
});
