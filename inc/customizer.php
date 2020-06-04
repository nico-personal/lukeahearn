<?php 
/** 
* Theme customizer
*
* Learn more: https://codex.wordpress.org/Theme_Customization_API
*
* @since   1.0.0
* @package themezero
*/


/**
*  Register Theme Option
*/
function themezero_customize_register( $wp_customize ) {


	$wp_customize->add_section('themezero_theme_option', array(
        'title'    => __('Theme options', 'themezero'),
        'priority' => 120,
    ));

	$wp_customize->add_setting( 'header_info', array(
	  'type' => 'theme_mod', 
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', 
	  'default' => '',
	  'transport' => 'refresh', 
	  'themezero_sanitize_js_callback' => '', 
	) );


	$wp_customize->add_setting( 'header_button', array(
	  'type' => 'theme_mod', 
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', 
	  'default' => '',
	  'transport' => 'refresh', 
	  'themezero_sanitize_js_callback' => '', 
	) );

	$wp_customize->add_control('header_top_button', array(
		'type' => 'textarea',
        'label'      => __('Header Button', 'themezero'),
        'section'    => 'themezero_theme_option',
        'settings'   => 'header_button',
    ));
  

    $wp_customize->add_setting( 'footer_form', array(
	  'type' => 'theme_mod', 
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', 
	  'default' => '',
	  'transport' => 'refresh', 
	  'themezero_sanitize_js_callback' => '', 
	) );

	$wp_customize->add_control('header_top_right', array(
		'type' => 'textarea',
        'label'      => __('Footer Form', 'themezero'),
        'section'    => 'themezero_theme_option',
        'settings'   => 'footer_form',
    ));


}


/**
*  Sanitize Input Field
*/
function themezero_sanitize_text_input($input) {
	if(!isset($input)) {
		return;
	}
	$output = sanitize_text_field($input);

	return $output;
}


/**
*  Sanitize Link Field
*/
function themezero_sanitize_link_input($input) {
	if(!isset($input)) {
		return;
	}
	$output = esc_url($input);

	return $output;
}

add_action( 'customize_register', 'themezero_customize_register' );
