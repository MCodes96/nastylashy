document.addEventListener("DOMContentLoaded", () => {
	// initialize slick carousel
	jQuery(".image-carousel .carousel").slick({
		infinite: true,
		prevArrow: ".image-carousel .prev",
		nextArrow: ".image-carousel .next",
		speed: 900,
		centerMode: true,
		variableWidth: true,
		autoplay: true,
		autoplaySpeed: 5000,
		pauseOnHover: true,
		pauseOnFocus: true,
		swipeToSlide: true,
	});
});
