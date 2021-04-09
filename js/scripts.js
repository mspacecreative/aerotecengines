(function($) {
	
	// OPEN OVERLAY ON ZOHO FORM SUBMISSION
	var submitButton = $('#formsubmit');
	var successMessage = $('.form-success-message-container');
	submitButton.click(function() {
		$('body').addClass('success');
	});
	$(window).on('load', function() {
		if ( $('body').hasClass('success') ) {
			successMessage.fadeIn();
		}
	});
	/*
	var successMessage = $('.form-success-message-container');
	$('#zoho-form').submit(function() {
		successMessage.fadeIn();
	});
	*/
	$('.closeModalButton').click(function() {
		successMessage.fadeOut();
		$('body').removeClass('success');
	});
	
	function addFixedToBody() {
		// LANGUAGE SWITCHER
		var fixedHeader = $('.et-fixed-header');
		if ( fixedHeader.length ) {
			$('.languageSwitcher').addClass('fixed');
		} else {
			$('.languageSwitcher').removeClass('fixed');
		}
	}
	
	var paraHeight = $('.carousel').find('p').outerHeight();
	
	$('.carousel').parent().siblings('.text-column').css('padding-bottom', paraHeight + 15);
	
	// HIDDEN CONTENT
	$('.read-more.lightbox').each(function() {
		$(this).click(function() {
			$(this).prev().fadeToggle();
			$(this).prev().prev().fadeToggle();
			$(this).prev().prev().prev().fadeToggle();
		});
	});
	
	$('.inline-links-wrap').each(function() {
		$(this).parent().css({
			'display': 'inline-block',
			'font-size': '0',
			'margin-bottom': '0',
		});
	});
	
	$('.panel-overlay').click(function() {
		$(this).fadeToggle();
		$(this).next().fadeToggle();
		$(this).next().next().fadeToggle();
	});
	
	$('.hamburger.close-panel').click(function() {
		$(this).fadeToggle();
		$(this).next().fadeToggle();
		$(this).prev().fadeToggle();
	});
	
	$('.read-more.accordion').each(function() {
		$(this).click(function() {
			$(this).toggleClass('expand');
			$(this).prev().slideToggle();
			$('.hidden-content').not($(this).prev()).slideUp();
			$('.hidden-content').not($(this)).next().html('Read more');
			$('.read-more.accordion').not($(this)).removeClass('expand');
			
			if ( $(this).hasClass('expand') ) {
				$(this).html('Close');
			} else {
				$('.read-more.accordion').html('Read more');
			}
		});
	});
	
	// DESKTOP CHILD NAV FUNCTIONALITY
	$('#et-top-navigation li ul.sub-menu .menu-item-has-children').hover(function() {
		$(this).children('.sub-menu').slideToggle();
	});
	
	function mapOffset() {
		var paddingOffset = $('.approved-centres').prev().css('padding-bottom');
		$('.approved-centres').css('margin-top', '-' + paddingOffset);
		$('#map').css('margin-top', paddingOffset);
	}
	
	function changeHeader() {
		if ( window.location.pathname == '/' ) {
			if ($('.home .stickymenu').hasClass('reveal')) {
				$('.home #logo').css('display', 'none');
				$('.alt-logo').css('display', 'inline-block');
				$('#main-header').css('background-color', '#fff');
				$('.hamburger-inner').addClass('change');
			} else {
				$('.home #logo').css('display', 'inline-block');
				$('.alt-logo').css('display', 'none');
				$('#main-header').css('background-color', 'transparent');
				$('.hamburger-inner').removeClass('change');
			}
		}
	}
	
	function pageContainerClear() {
		$('#page-container').css('padding-top', $('#main-header').height());
	}
	
	function bgImageContainer() {
		$('.one-half.bg-img').height($('.one-half.bg-img').siblings('.one-half').outerHeight());
	}
	
	function sliderHeight() {
		$('.hero-slider').height($(window).height());
	}
	
	function pgwGallery() {
		$('.pgwSlider').pgwSlider({
			transitionEffect: 'sliding',
			autoSlide: false,
			verticalCentering: true,
		});
	}
	
	function checkSize() {
		$('.ps-current li, .ps-list li').each(function () {
		    var $container = $(this),
		        imgUrl = $container.find('img').prop('src');
		    if (imgUrl) {
		      $container
		        .css('backgroundImage', 'url(' + imgUrl + ')')
		        .addClass('compat-object-fit');
		    }
		});
	}
	
	$(document).ready(function() {
		sliderHeight();
		mapOffset();
		bgImageContainer();
		pageContainerClear();
		pgwGallery();
		checkSize();
		
		$('.testimonials-slider, .photo-gallery').slick({
		    dots: true,
			adaptiveHeight: true,
		});
		$('.hero-slider').slick({
		    autoplay: true,
			dots: true,
			adaptiveHeight: true,
			autoplaySpeed: 4000,
		});
		
		// CAROUSEL RENDERING
		$('.carousel').slick({
		    dots: true,
			arrows: true,
			adaptiveHeight: true,
		});
		// END CAROUSEL RENDERING
	});
	
	$(window).resize(function() {
		sliderHeight();
		mapOffset();
		bgImageContainer();
		pageContainerClear();
		checkSize();
		
		if ( $('.read-more').hasClass('expand') ) {
			$(this).html('Close');
		} else {
			$(this).html('Read more');
		}
	});
	
	$(window).scroll(function () {
		changeHeader();
		addFixedToBody();
	});
})(jQuery);
