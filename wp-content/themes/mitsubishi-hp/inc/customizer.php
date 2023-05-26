<?php

defined( 'ABSPATH' ) || exit;

/**
 * Implement Theme Customizer additions and adjustments.
 * https://codex.wordpress.org/Theme_Customization_API
 *
 * How do I "output" custom theme modification settings? https://developer.wordpress.org/reference/functions/get_theme_mod
 * echo get_theme_mod( 'copyright_info' );
 * or: echo get_theme_mod( 'copyright_info', 'Default (c) Copyright Info if nothing provided' );
 *
 * "sanitize_callback": https://codex.wordpress.org/Data_Validation
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 *
 * @return void
 */
function mitsubishi_hp_customize( $wp_customize ) {
	/**
	 * Initialize sections
	 */
	// Thông tin Header
	$wp_customize->add_section(
		'theme_header_section',
		array(
			'title'    => __( 'Thông tin Header', 'mitsubishi-hp' ),
			'priority' => 1000,
		)
	);

	// Header Logo.
	$wp_customize->add_setting(
		'header_logo',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'header_logo',
			array(
				'label'       => __( 'Upload Logo', 'mitsubishi-hp' ),
				'section'     => 'theme_header_section',
				'settings'    => 'header_logo',
				'priority'    => 1,
			)
		)
	);

	// Header Logo Light.
	$wp_customize->add_setting(
		'header_logo_light',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'header_logo_light',
			array(
				'label'       => __( 'Upload Logo (light)', 'mitsubishi-hp' ),
				'section'     => 'theme_header_section',
				'settings'    => 'header_logo_light',
				'priority'    => 2,
			)
		)
	);

	/**
	 * Initialize sections
	 */
	// Thông tin Liên hệ
	$wp_customize->add_section(
		'theme_contact_section',
		array(
			'title'    => __( 'Thông tin Liên hệ', 'mitsubishi-hp' ),
			'priority' => 1001,
		)
	);

	// Hotline
	$wp_customize->add_setting(
		'hp_hotline',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'hp_hotline',
		array(
			'type'     => 'text',
			'label'    => __( 'Hotline', 'mitsubishi-hp' ),
			'section'  => 'theme_contact_section',
			'settings' => 'hp_hotline',
			'priority' => 1,
		)
	);

	// Support
	$wp_customize->add_setting(
		'hp_support',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'hp_support',
		array(
			'type'     => 'text',
			'label'    => __( 'Hỗ trợ kỹ thuật', 'mitsubishi-hp' ),
			'section'  => 'theme_contact_section',
			'settings' => 'hp_support',
			'priority' => 2,
		)
	);

	// Email
	$wp_customize->add_setting(
		'hp_email',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'hp_email',
		array(
			'type'     => 'email',
			'label'    => __( 'Email', 'mitsubishi-hp' ),
			'section'  => 'theme_contact_section',
			'settings' => 'hp_email',
			'priority' => 3,
		)
	);

	// Facebook
	$wp_customize->add_setting(
		'hp_facebook',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'hp_facebook',
		array(
			'type'     => 'url',
			'label'    => __( 'Facebook', 'mitsubishi-hp' ),
			'section'  => 'theme_contact_section',
			'settings' => 'hp_facebook',
			'priority' => 4,
		)
	);

	// Messenger
	$wp_customize->add_setting(
		'hp_messenger',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'hp_messenger',
		array(
			'type'     => 'url',
			'label'    => __( 'Messenger', 'mitsubishi-hp' ),
			'section'  => 'theme_contact_section',
			'settings' => 'hp_messenger',
			'priority' => 5,
		)
	);

	// Zalo
	$wp_customize->add_setting(
		'hp_zalo',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'hp_zalo',
		array(
			'type'     => 'url',
			'label'    => __( 'Zalo', 'mitsubishi-hp' ),
			'section'  => 'theme_contact_section',
			'settings' => 'hp_zalo',
			'priority' => 6,
		)
	);

	// Youtube
	$wp_customize->add_setting(
		'hp_youtube',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'hp_youtube',
		array(
			'type'     => 'url',
			'label'    => __( 'Youtube', 'mitsubishi-hp' ),
			'section'  => 'theme_contact_section',
			'settings' => 'hp_youtube',
			'priority' => 7,
		)
	);

	/**
	 * Initialize sections
	 */
	// Thông tin Footer
	$wp_customize->add_section(
		'theme_footer_section',
		array(
			'title'    => __( 'Thông tin Footer', 'mitsubishi-hp' ),
			'priority' => 1002,
		)
	);

	// Link "Bảng giá"
	$wp_customize->add_setting(
		'hp_link_bg',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'hp_link_bg',
		array(
			'type'     => 'url',
			'label'    => __( 'Link "Bảng giá"', 'mitsubishi-hp' ),
			'section'  => 'theme_footer_section',
			'settings' => 'hp_link_bg',
			'priority' => 1,
		)
	);

	// Link "Đăng ký lái thử"
	$wp_customize->add_setting(
		'hp_link_dklt',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'hp_link_dklt',
		array(
			'type'     => 'url',
			'label'    => __( 'Link "Đăng ký lái thử"', 'mitsubishi-hp' ),
			'section'  => 'theme_footer_section',
			'settings' => 'hp_link_dklt',
			'priority' => 2,
		)
	);

	// Link "Nhà phân phối"
	$wp_customize->add_setting(
		'hp_link_npp',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'hp_link_npp',
		array(
			'type'     => 'url',
			'label'    => __( 'Link "Nhà phân phối"', 'mitsubishi-hp' ),
			'section'  => 'theme_footer_section',
			'settings' => 'hp_link_npp',
			'priority' => 3,
		)
	);

	// Link "Tải Brochure"
	$wp_customize->add_setting(
		'hp_link_tb',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'hp_link_tb',
		array(
			'type'     => 'url',
			'label'    => __( 'Link "Tải Brochure"', 'mitsubishi-hp' ),
			'section'  => 'theme_footer_section',
			'settings' => 'hp_link_tb',
			'priority' => 4,
		)
	);

	// Link "Chính sách bảo mật"
	$wp_customize->add_setting(
		'hp_link_csbm',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'hp_link_csbm',
		array(
			'type'     => 'url',
			'label'    => __( 'Link "Chính sách bảo mật"', 'mitsubishi-hp' ),
			'section'  => 'theme_footer_section',
			'settings' => 'hp_link_csbm',
			'priority' => 5,
		)
	);

	// Bản quyền thuộc về
	$wp_customize->add_setting(
		'hp_bqtv',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'hp_link_csbm',
		array(
			'type'     => 'text',
			'label'    => __( 'Link "Bản quyền thuộc về"', 'mitsubishi-hp' ),
			'section'  => 'theme_footer_section',
			'settings' => 'hp_link_csbm',
			'priority' => 6,
		)
	);
}
add_action( 'customize_register', 'mitsubishi_hp_customize' );

/**
 * Bind JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @return void
 */
function mitsubishi_hp_customize_preview_js() {
	wp_enqueue_script( 'customizer', get_template_directory_uri() . '/inc/customizer.js', array( 'jquery' ), null, true );
}
add_action( 'customize_preview_init', 'mitsubishi_hp_customize_preview_js' );
