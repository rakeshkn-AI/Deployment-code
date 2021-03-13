$(function() {"use strict";

	var video1;
	var left_off;
	var top_off;
	var myPara = document.createElement("body");
	// datepicker
	if ($('.pick-date').length) {
		$('.pick-date').datepicker({
			format : "dd/mm/yyyy"
		});
	}
	$('.drop-down-parent').on('click', function() {
		if ($(window).width() <= 767) {
			$(this).find('.drop-down').slideToggle();
			$(this).siblings().find('.drop-down').slideUp();
			$(this).toggleClass('active-arrow');
			$(this).siblings().removeClass('active-arrow');
		}
	});
	if ($('.time-pick').length) {
		$('.time-pick').timepicker({
			'scrollDefault' : 'now'
		});
	}

	if ($("#blog-slider").length) {
		$("#blog-slider").owlCarousel({
			autoPlay : false,
			items : 3,
			itemsDesktop : [1199, 3],
			itemsDesktopSmall : [979, 3],
			itemsTablet : [768, 3],
			itemsMobile : [767, 1],
			navigation : true,
			pagination : false

		});
	}

	if ($("#blog-page-post").length) {
		$("#blog-page-post").owlCarousel({
			autoPlay : false,
			items : 2,
			itemsDesktop : [1199, 2],
			itemsDesktopSmall : [979, 2],
			itemsTablet : [768, 2],
			itemsMobile : [767, 1],
			navigation : true,
			pagination : false

		});
	}

	if ($(".review-profile").length) {
		$(".review-profile").owlCarousel({
			autoPlay : false,
			items : 1,
			itemsDesktop : [1199, 1],
			itemsDesktopSmall : [979, 1],
			itemsTablet : [768, 1],
			itemsMobile : [767, 1],
			navigation : true,
			pagination : false

		});
	}
	if ($(".car-parts-slider").length) {
		var $owl_car_parts = $(".car-parts-slider").owlCarousel({
			autoPlay : true,
			items : 1,
			itemsDesktop : [1199, 1],
			itemsDesktopSmall : [979, 1],
			itemsTablet : [768, 1],
			itemsMobile : [767, 1],
			navigation : false,
			pagination : true

		});

		setInterval(function() {
			$('.vehicles-carousal-thumb').find('li').removeClass('active');
			var page_index = $('.owl-pagination .owl-page.active').index();
			$('.vehicles-carousal-thumb').find('li').eq(page_index).addClass('active');
		}, 100);

		$('.vehicles-carousal-thumb li').on('click', function() {
			$(this).siblings("li").removeClass('active');
			$(this).addClass('active');
			var index = $(this).index();
			$owl_car_parts.trigger('owl.goTo', index)
		});
	}

	if ($(".safety-slider").length) {
		$(".safety-slider").owlCarousel({
			autoPlay : 2000,
			items : 1,
			itemsDesktop : [1199, 1],
			itemsDesktopSmall : [979, 1],
			itemsTablet : [768, 1],
			itemsMobile : [767, 1],
			navigation : true,
			pagination : false
		});
	}

	// Range slider js start here

	if ($("#slider").length) {
		$("#slider").slider({
			range : true,
			min : 24,
			max : 700,
			values : [24, 320],
			slide : function(event, ui) {
				$("#amount1").val("$" + ui.values[0]);
				$("#amount2").val("$" + ui.values[1]);
			}
		});
		$("#amount1").val("$" + $("#slider").slider("values", 0));
		$("#amount2").val("$" + $("#slider").slider("values", 1));
	}

	if ($('.select').length) {
		$('.select').selectBox();
	}

	$('.fa-search').on('click', function() {
		$('.search-bar').slideToggle();
	});

	$('.play-btn').on('click', function() {
		video1 = '<iframe src="' + $('.video img').attr('data-video') + '"></iframe>';

		jQuery('.video img').after(video1);
		return false;

	});

	$('.audio-wrap').on('click', function() {

	});

	if ($('.fancybox-button').length) {
		$(".fancybox-button").fancybox();
	}
	//window load start here

	$(window).load(function() {
		$("#loading").fadeOut(500);
		if ($('.flexslider').lenght) {
			$('.flexslider').flexslider({
				animation : "slide",
				customDirectionNav : $(".custom-navigation a"),
				controlNav : false
			});

		}
		$(".loader").fadeOut(500);
	});

}); 