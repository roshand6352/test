$(document).click(function (event) {
	if (!$(event.target).is('.navbar-collapse *')) {
		$('.navbar-collapse').collapse('hide');
	}
});


$(".hero-slider").slick({
	slidesToShow:1,
	infinite:!0,
	slidesToScroll:1,
	autoplay:!0,
	autoplaySpeed:3e5,
	dots:!0,
	arrows:!0
}),
$(".donejob-slider").slick({
	slidesToShow:2.02,
	infinite:!0,
	slidesToScroll:1,
	autoplay:!0,
	autoplaySpeed:3e5,
	dots:!1,
	arrows:!0,
	responsive: [
	{
		breakpoint: 992,
		settings: {
			slidesToShow: 2,
		}
	},{
		breakpoint: 768,
		settings: {
			slidesToShow: 1,
		}
	},{
		breakpoint: 576,
		settings: {
			slidesToShow: 1,
		}
	}]
});
$(".availablenow-slider").slick({
	slidesToShow:3.06,
	// slidesToShow:3,
	infinite:!0,
	slidesToScroll:1,
	autoplay:!0,
	autoplaySpeed:3e5,
	dots:!1,
	arrows:!0,
	responsive: [
	{
		breakpoint: 1200,
		settings: {
			slidesToShow: 3,
		}
	},{
		breakpoint: 992,
		settings: {
			slidesToShow: 2,
		}
	},{
		breakpoint: 768,
		settings: {
			slidesToShow: 1,
		}
	}]
});

$(".mowing-reviews").slick({
	slidesToShow:2.02,
	infinite:!0,
	slidesToScroll:1,
	autoplay:!0,
	autoplaySpeed:3e5,
	dots:!1,
	arrows:!0,
	responsive: [
	{
		breakpoint: 992,
		settings: {
			slidesToShow: 2,
		}
	},{
		breakpoint: 768,
		settings: {
			slidesToShow: 1,
		}
	}]
});
$(".photos-slider").slick({
	slidesToShow:3,
	infinite:!0,
	slidesToScroll:1,
	autoplay:!0,
	autoplaySpeed:3e5,
	dots:!1,
	arrows:!0,
	responsive: [
	{
		breakpoint: 992,
		settings: {
			slidesToShow: 3,
		}
	},{
		breakpoint: 768,
		settings: {
			slidesToShow: 2,
		}
	},{
		breakpoint: 576,
		settings: {
			slidesToShow: 1,
		}
	}]
});
$(".latest-articles").slick({
	slidesToShow:3.04,
	// slidesToShow:3,
	infinite:!0,
	slidesToScroll:1,
	autoplay:!0,
	autoplaySpeed:3e5,
	dots:!1,
	arrows:!0,
	responsive: [
	{
		breakpoint: 992,
		settings: {
			slidesToShow: 3,
		}
	},{
		breakpoint: 768,
		settings: {
			slidesToShow: 2,
		}
	},{
		breakpoint: 576,
		settings: {
			slidesToShow: 1,
		}
	}]
});
$(".provider-insights").slick({
	slidesToShow:3.04,
	// slidesToShow:3,
	infinite:!0,
	slidesToScroll:1,
	autoplay:!0,
	autoplaySpeed:3e5,
	dots:!1,
	arrows:!0,
	responsive: [
	{
		breakpoint: 992,
		settings: {
			slidesToShow: 3,
		}
	},{
		breakpoint: 768,
		settings: {
			slidesToShow: 2,
		}
	},{
		breakpoint: 576,
		settings: {
			slidesToShow: 1,
		}
	}]
});