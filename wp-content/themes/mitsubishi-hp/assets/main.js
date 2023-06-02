// pngack Imports
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
	jQuery('.banner-hero-items').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		infinite: true,
		responsive: [
			{
				breakpoint: 991,
				settings: {
					arrows: false,
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 768,
				settings: {
					arrows: false,
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 480,
				settings: {
					arrows: false,
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
		]
	});
	jQuery('.hp-product-versions-items').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		centerMode: true,
		responsive: [
			{
				breakpoint: 991,
				settings: {
					arrows: false,
					slidesToShow: 3,
					slidesToScroll: 1,
					focusOnSelect: false,
				}
			},
			{
				breakpoint: 768,
				settings: {
					arrows: false,
					slidesToShow: 3,
					slidesToScroll: 1,
					focusOnSelect: false,
				}
			},
			{
				breakpoint: 480,
				settings: {
					arrows: false,
					slidesToShow: 1,
					slidesToScroll: 1,
					focusOnSelect: false,
				}
			}
		]
	});

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
	const CARS_LIST = [
		{
			name: "Xpander Cross",
			colors: [
				{
					bgColor: 'rgb(234, 234, 234)', color: '#ff8c00', name: 'Cam', imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_khung_camden.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_frontleft.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_frontright.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_rearright.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_rearleft.png' }
					]
				},
				{
					bgColor: 'rgb(237, 237, 237)', color: '#ffffff', name: 'Trắng', imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_khung_trang.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_trang_frontleft.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_trang_frontright.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_trang_rearright.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_trang_rearleft.png' },
					]
				},
				{
					bgColor: 'rgb(239, 239, 239)',
					color: '#c9c9c9',
					name: 'Nâu',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_khung_nau.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_nau_frontleft.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_nau_frontright.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_nau_rearright.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_nau_rearleft.png' },
					]
				},
				{
					bgColor: 'rgb(229, 229, 229)',
					color: '#000000',
					name: 'Đen',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_khung_den.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_den_frontleft.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_den_frontright.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_den_rearright.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander_cross_den_rearleft.png' },
					]
				}
			],

		},
		{
			name: "Attrage",
			colors: [
				{
					bgColor: 'rgb(237, 237, 237)',
					color: '#ffffff',
					name: 'Trắng',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/attrage-khungxe-trang2-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/attrage-front-left-trang.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/attrage-front-right-trang.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/attrage-rear-right-trang.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/attrage-rear-left-trang.png' },
					]
				},
				{
					bgColor: 'rgb(191, 191, 191)',
					color: '#c9c9c9',
					name: 'Xám',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/attrage-khungxe-xam2-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/attrage-front-left-xam.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/attrage-front-right-xam.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/attrage-rear-right-xam.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/attrage-rear-left-xam.png' },
					]
				},
				{
					bgColor: 'rgb(205, 214, 201)',
					color: '#dd0000',
					name: 'Đỏ',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/attrage-khungxe-do2-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/attrage-front-left-do.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/attrage-front-right-do.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/attrage-rear-right-do.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/attrage-rear-left-do.png' },
					]
				}
			]
		},
		{
			name: "Xpander",
			colors: [
				{
					bgColor: 'rgb(221, 221, 217)',
					color: '#ffffff',
					name: 'Trắng',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-khungxe-trang.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-front-feft-trang.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-front-right-trang.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-rear-right-trang.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-rear-left-trang.png' },
					]
				},
				{
					bgColor: 'rgb(237, 237, 222)',
					color: '#964b00',
					name: 'Nâu',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-khungxe-nau.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-front-feft-nau.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-front-right-nau.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-rear-right-nau.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-rear-left-nau.png' },
					]
				},
				{
					bgColor: 'rgb(221, 221, 221)',
					color: '#000000',
					name: 'Đen',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-khungxe-den.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-front-left-den.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-front-right-den.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-rear-right-den.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-rear-left-den.png' },
					]
				},
				{
					bgColor: 'rgb(131, 161, 191)',
					color: '#c9c9c9',
					name: 'Xám',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-khungxe-xambac.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-front-feft-xambac.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-front-right-xambac.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-rear-right-xambac.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/xpander-rear-left-xambac.png' },
					]
				},
			]
		},
		{
			name: "Outlander",
			colors: [
				{
					bgColor: 'rgb(221, 221, 221)',
					color: '#ffffff',
					name: 'Trắng',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander-khungxe-trang.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_front_left_trang-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_front_right_trang-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_rear_right_trang-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_rear_left_trang-min.png' },
					]
				},
				{
					bgColor: 'rgb(221, 184, 184)',
					color: '#dd0000',
					name: 'Đỏ',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander-khungxe-do.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_front_left_do-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_front_right_do-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_rear_right_do-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_rear_left_do-min.png' },
					]
				},
				{
					bgColor: 'rgb(185, 189, 191)',
					color: '#c9c9c9',
					name: 'Xám',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander-khungxe-xam.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_front_left_xam-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_front_right_xam-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_rear_right_xam-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_rear_left_xam-min.png' },
					]
				},
				{
					bgColor: 'rgb(73, 73, 73)',
					color: '#000000',
					name: 'Đen',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander-khungxe-den.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_front_left_den-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_front_right_den-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_rear_right_den-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_rear_left_den-min.png' },
					]
				},
				{
					bgColor: 'rgb(140, 118, 100)',
					color: '#964b00',
					name: 'Nâu',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander-khungxe-nau.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_front_left_nau-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_front_right_nau-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_rear_right_nau-min.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/outlander_rear_left_nau-min.png' },
					]
				}
			]
		},
		{
			name: "Pajero Sport",
			colors: [
				{
					bgColor: 'rgb(237, 237, 222)',
					color: '#ffffff',
					name: 'Trắng',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/pa%CC%A3ero-sport-khung-trang.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/pa%CC%A3ero-sport-front-left-trang.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/pa%CC%A3ero-sport-front-right-trang.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/pa%CC%A3ero-sport-rear-left-trang.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/pa%CC%A3ero-sport-right-right-trang.png' },
					]
				},
				{
					bgColor: 'rgb(214, 214, 214)',
					color: '#000000',
					name: 'Đen',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/pa%CC%A3ero-sport-khung-den.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/pa%CC%A3ero-sport-front-left-den.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/pa%CC%A3ero-sport-front-right-den.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/pa%CC%A3ero-sport-rear-left-den.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/pa%CC%A3ero-sport-right-right-den.png' },
					]
				},
				{
					bgColor: 'rgb(174, 183, 191)',
					color: '#964b00',
					name: 'Nâu',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/pa%CC%A3ero-sport-khung-nau.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/pa%CC%A3ero-sport-front-left-nau.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/pa%CC%A3ero-sport-front-right-nau.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/pa%CC%A3ero-sport-rear-left-nau.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/pa%CC%A3ero-sport-right-right-nau.png' },
					]
				}
			]
		},
		{
			name: "Triton Athlete",
			colors: [
				{
					bgColor: 'rgb(191, 191, 191)',
					color: '#ff8c00',
					name: 'Cam',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/new-triton-athlete-side-cam.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/new-triton-athlete-cam-front-left.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/new-triton-athlete-cam-front-right.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/new-triton-athlete-cam-rear-right.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/new-triton-athlete-cam-rear-high.png' },
					]
				},
				{
					bgColor: 'rgb(151, 171, 191)',
					color: '#ffffff',
					name: 'Trắng',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/new-triton-athlete-khung-trang.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/new-triton-athlete-side-trang.png' },
					]
				},
				{
					bgColor: 'rgb(197, 214, 188)',
					color: '#000000',
					name: 'Đen',
					imageList: [
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/new-triton-athlete-khung-den.png' },
						{ image: 'wp-content/themes/mitsubishi-hp/assets/images/new-triton-athlete-side-den.png' },
					]
				}
			]
		}
	];

	function select_car_change(selectedIndex) {
		let sliderLength = CARS_LIST[selectedIndex].colors[0].imageList.length
		jQuery('#Car_Selected').text(CARS_LIST[selectedIndex].name);
		jQuery('#Car_Options .dropdown-item').removeClass('active');
		jQuery(`#Car_${selectedIndex}_Option`).addClass('active');

		jQuery('.hp-pm-car').removeClass('show');
		jQuery(`#Car_${selectedIndex}_Model .hp-pm-car-bg span:nth-child(2)`).addClass('active');
		jQuery(`#Car_${selectedIndex}_Model .hp-pm-car-bg span:nth-child(2)`).addClass('top');
		jQuery(`#Car_${selectedIndex}_Model .hp-pm-car-bg span:not(:first-child):not(:nth-child(2))`).removeClass('top');
		jQuery(`#Car_${selectedIndex}_Model .hp-pm-car-body img`).attr('src', CARS_LIST[selectedIndex].colors[0].imageList[0].image);
		jQuery(`#Car_${selectedIndex}_Model .hp-pm-paging`).html('01' + '<span>/</span>' + '0' + sliderLength)
		jQuery(`#Car_${selectedIndex}_Model .hp-pm-car-wheel`).removeClass('hide');
		// jQuery(`#${id} .hp-pm-car-body img`).attr('src', CARS_LIST[idx].colors[colorId].imageList[i].image)
		jQuery(`#Car_${selectedIndex}_Model .hp-pm-color`).removeClass('active');
		jQuery(`#Car_${selectedIndex}_Model .hp-pm-color:first-child`).addClass('active');
		jQuery(`#Car_${selectedIndex}_Model .hp-pm-text`).text(CARS_LIST[selectedIndex].colors[0].name);
		jQuery(`#Car_${selectedIndex}_Model`).addClass('show');

		slick_slider('Car_' + selectedIndex + '_Model', selectedIndex, 0)
	}

	function previewAnimated() {
		var scrollTop = jQuery(window).scrollTop();
		var topDistance = jQuery('.hp-preview').offset().top;
		if (!jQuery('.hp-preview').hasClass('animated') && (topDistance - jQuery('.hp-preview').height()) < scrollTop) {
			jQuery('.hp-preview').addClass('animated');
			setTimeout(() => {
				select_car_change(0);
			}, 100)
		}
	}

	jQuery(function () {
		jQuery('.hp-pm-car').each(function () {
			var elId = jQuery(this).attr('id');
			console.log(elId)
			const index = elId.replaceAll('Car_', '').replaceAll('_Model', '');
			let bgInnerHTML = '<span class="active"></span>';
			let colorsInnerHTML = '';
			CARS_LIST[index].colors.forEach((color, idx) => {
				bgInnerHTML += `<span class="${idx === 0 ? 'active' : ''}" style="background: ${color.bgColor}"></span>`;
				colorsInnerHTML += `<div data-color="${idx}" class="hp-pm-color ${idx === 0 ? 'active' : ''}"><div class="hp-pm-color-icon" style="background-color: ${color.color};"></div></div>`
			})
			jQuery(`#${elId} .hp-pm-car-bg`).html(bgInnerHTML);
			jQuery(`#${elId} .hp-pm-colors`).html(colorsInnerHTML);
			jQuery(`#${elId} .hp-pm-text`).text(CARS_LIST[index].colors[0].name);

			jQuery(`#${elId} .hp-pm-color`).on('click', function () {

				// console.log(elIdFinal)
				jQuery(`#${elId} .hp-pm-color`).removeClass('active');
				jQuery(this).addClass("active");
				const colorId = jQuery(this).data("color");
				jQuery(`#${elId} .hp-pm-car-bg span:nth-child(${(colorId + 1)})`).addClass('active');
				jQuery(`#${elId} .hp-pm-car-bg span:nth-child(${(colorId + 1)})`).addClass('top');
				jQuery(`#${elId} .hp-pm-car-bg span:not(:first-child):not(:nth-child(${(colorId + 1)}))`).removeClass('top');
				setTimeout(() => {
					jQuery(`#${elId} .hp-pm-car-bg span:not(:first-child):not(:nth-child(${(colorId + 1)}))`).removeClass('active');
				}, 300)

				let sliderLength = (CARS_LIST[index].colors[colorId].imageList.length);
				jQuery(`#${elId} .hp-pm-paging`).html('01' + '<span>/</span>' + '0' + sliderLength);
				jQuery(`#${elId} .hp-pm-car-wheel`).removeClass('hide');
				jQuery(`#${elId} .hp-pm-car-body img`).attr('src', CARS_LIST[index].colors[colorId].imageList[0].image);
				jQuery(`#${elId} .hp-pm-text`).text(CARS_LIST[index].colors[colorId].name);

				// slick_slider(elId,index)
				slick_slider(elId, index, colorId)
			});

			slick_slider(elId, 0, 0)
		});

		previewAnimated();

		jQuery('#Car_Options .dropdown-item').on('click', function () {
			const elId = jQuery(this).attr('id');
			const index = elId.replaceAll('Car_', '').replaceAll('_Option', '')
			select_car_change(Number(index));
		})
	})

	jQuery(window).on('scroll', function () {
		previewAnimated();
	});

	function slick_slider(id, idx, colorId) {
		let index = 1;
		let i = index;
		const indexSlide = id.replaceAll('Car_', '').replaceAll('_Model', '');
		let sliderLength = (CARS_LIST[idx].colors[colorId].imageList.length);
		jQuery(`#${id} .hp-pm-controls .next `).on('click', function () {
			let maxIndex = sliderLength - 1
			// jQuery(`#${id} .hp-pm-paging`).html('01' + '<span>/</span>' + '0' + sliderLength);
			console.log('index next', index)
			i = index++;
			console.log('i next', i)
			if (i > maxIndex) {
				index = 1;
				i = 0
				setTimeout(() => {
					jQuery(`#${id} .hp-pm-car-wheel`).removeClass('hide');
				})
				jQuery(`#${id} .hp-pm-car-item .shadow-item`).css('visibility', 'inherit');
				jQuery(`#${id} .hp-pm-car-body img`).attr('src', CARS_LIST[idx].colors[colorId].imageList[i].image);
				// let sliderLength = (CARS_LIST[indexSlide].colors[colorId].imageList.length);
				jQuery(`#${id} .hp-pm-paging`).html('0' + (i + 1) + '<span>/</span>' + '0' + sliderLength)
				// jQuery(`#${id} .hp-pm-paging`).html('0' + (i + 1) + '<span>/</span>' + '05')
			} else {

				setTimeout(() => {
					jQuery(`#${id} .hp-pm-car-wheel`).addClass('hide');
				})
				jQuery(`#${id} .hp-pm-car-item .shadow-item`).css('visibility', 'hidden');
				// jQuery(`#${id} .hp-pm-car-body img`).attr('src', CARS_LIST[idx].colors[colorId].imageList[i].image);
				jQuery(`#${id} .hp-pm-car-body img`).attr('src', CARS_LIST[idx].colors[colorId].imageList[i].image)
				jQuery(`#${id} .hp-pm-paging`).html('0' + (i + 1) + '<span>/</span>' + '0' + sliderLength)

			}

		});
		jQuery(`#${id} .hp-pm-controls .prev `).on('click', function () {
			i = index;
			console.log(index)
			if (index === 1) {

				index = sliderLength;
				// i = 4
				i = index
				console.log(i)
				setTimeout(() => {
					jQuery(`#${id} .hp-pm-car-wheel`).addClass('hide');
				})
				jQuery(`#${id} .hp-pm-car-item .shadow-item`).css('visibility', 'hidden');
				jQuery(`#${id} .hp-pm-car-body img`).attr('src', CARS_LIST[idx].colors[colorId].imageList[i - 1].image);
				jQuery(`#${id} .hp-pm-paging`).html('0' + (i) + '<span>/</span>' + '0' + sliderLength)
			} else {
				console.log('index prev', index)
				index = index - 1;
				i = index;
				if (i == 1) {
					setTimeout(() => {
						jQuery(`#${id} .hp-pm-car-wheel`).removeClass('hide');
					})
					jQuery(`#${id} .hp-pm-car-item .shadow-item`).css('visibility', 'inherit');
					// jQuery(`#${id} .hp-pm-car-body img`).attr('src', CARS_LIST[idx].colors[colorId].imageList[i].image);
					jQuery(`#${id} .hp-pm-car-body img`).attr('src', CARS_LIST[idx].colors[colorId].imageList[i - 1].image)
					jQuery(`#${id} .hp-pm-paging`).html('0' + (i) + '<span>/</span>' + '0' + sliderLength)
				} else {
					setTimeout(() => {
						jQuery(`#${id} .hp-pm-car-wheel`).addClass('hide');
					})
					jQuery(`#${id} .hp-pm-car-item .shadow-item`).css('visibility', 'hidden');
					// jQuery(`#${id} .hp-pm-car-body img`).attr('src', CARS_LIST[idx].colors[colorId].imageList[i].image);
					jQuery(`#${id} .hp-pm-car-body img`).attr('src', CARS_LIST[idx].colors[colorId].imageList[i - 1].image)
					jQuery(`#${id} .hp-pm-paging`).html('0' + (i) + '<span>/</span>' + '0' + sliderLength)
				}
			}


		});
	}

	jQuery('.cta-contact__btn').on('click', function () {
		debugger
		console.log(jQuery(this).closest('.hp-contact-cta'))
		jQuery(this).closest('.hp-contact-cta').toggleClass('is-show')

	});

})();

