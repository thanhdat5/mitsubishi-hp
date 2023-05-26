// Webpack Imports
import * as bootstrap from 'bootstrap';


(function () {
	'use strict';

	// Focus input if Searchform is empty
	[].forEach.call(document.querySelectorAll('.search-form'), (el) => {
		el.addEventListener('submit', function (e) {
			var search = el.querySelector('input');
			if (search.value.length < 1) {
				e.preventDefault();
				search.focus();
			}
		});
	});

	// Initialize Popovers: https://getbootstrap.com/docs/5.0/components/popovers
	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
	var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
		return new bootstrap.Popover(popoverTriggerEl, {
			trigger: 'focus',
		});
	});
	function featureAnimated() {
		var scrollTop = jQuery(window).scrollTop();
		jQuery('.hp-card-animation').each(function () {
			var topDistance = jQuery(this).offset().top;
			if ((topDistance - jQuery(this).height()) < scrollTop) {
				jQuery(this).addClass('animated');
			}
		});
	}
	featureAnimated();
	jQuery(window).on('scroll', function () {
		featureAnimated();
	});

	jQuery('.hp-hn-bottom .nav-link.dropdown-toggle').on('click', function () {
		if (!jQuery(this).hasClass('show')) {
			jQuery('.hp-header').removeClass('show');
		} else {
			jQuery('.hp-header').addClass('show');
		}
	})
	jQuery('.hp-hn-bottom .dropdown-item').on('click', function () {
		jQuery('.hp-header').removeClass('show');
	})

	// Handle product page
	jQuery('.hp-pv-tabs li:first-child').addClass('active');
	jQuery('.hp-pv-infors .hp-pv-info:first-child').addClass('active');
	jQuery('.hp-pv-images .hp-pv-image:first-child').addClass('active');

	function setActiveVersion(index) {
		jQuery('.hp-pv-tabs li').removeClass('active');
		jQuery('.hp-pv-infors .hp-pv-info').removeClass('active');
		jQuery('.hp-pv-images .hp-pv-image').removeClass('active');

		jQuery(`#SelectVersion${index}`).addClass('active');
		jQuery(`#VersionInfo${index}`).addClass('active');
		jQuery(`#VersionImage${index}`).addClass('active');
	}

	jQuery('.hp-pv-tabs li').on('click', function () {
		const idEl = jQuery(this).attr('id');
		const index = idEl.replace('SelectVersion', '');
		setActiveVersion(index);
	})
	jQuery('.hp-product-version').on('click', function () {
		const idEl = jQuery(this).attr('id');
		const index = idEl.replace('SelectVersionImage', '');
		setActiveVersion(index);
	})

	jQuery('.hp-view-compare').on('click', function (e) {
		e.preventDefault();
		jQuery('.hp-view-compare').addClass('d-none');
		jQuery('.hp-compare').removeClass('d-none');
		jQuery('html, body').animate({
			scrollTop: jQuery("#CompareList").offset().top
		}, 1000);
	})

	jQuery('.hp-hide-compare').on('click', function (e) {
		e.preventDefault();
		jQuery('.hp-view-compare').removeClass('d-none');
		jQuery('.hp-compare').addClass('d-none');
	})

	jQuery('.hp-compare-model .hp-cm-image img:first-child').addClass('show');
	jQuery('.hp-compare-model .hp-cm-colors span:first-child').addClass('active');
	jQuery('.hp-compare-model .hp-cm-color span:first-child').addClass('show');

	jQuery('.hp-compare-model .hp-cm-colors span').on('click', function () {
		const idEl = jQuery(this).attr('id');
		let index = idEl.replaceAll('CompareVersion', '');
		index = index.replaceAll('ColorCode', '_');
		const pos = index.split('_');
		jQuery(`#CompareVersion${pos[0]} .hp-cm-image img`).removeClass('show');
		jQuery(`#CompareVersion${pos[0]}Image${pos[1]}`).addClass('show');

		jQuery(`#CompareVersion${pos[0]} .hp-cm-colors span`).removeClass('active');
		jQuery(`#CompareVersion${pos[0]}ColorCode${pos[1]}`).addClass('active');

		jQuery(`#CompareVersion${pos[0]} .hp-cm-color span`).removeClass('show');
		jQuery(`#CompareVersion${pos[0]}Color${pos[1]}`).addClass('show');
	})
})();
