<?php
/**
 * Theme functions and definitions
 *
 * @package finance_consultr
 */

if ( ! function_exists( 'finance_consultr_enqueue_styles' ) ) :
	/**
	 * @since Finance Consultr 1.0.0
	 */
	function finance_consultr_enqueue_styles() {
		wp_enqueue_style( 'finance-consultr-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'finance-consultr-style', get_stylesheet_directory_uri() . '/style.css', array( 'finance-consultr-style-parent' ), '1.0.0' );
		wp_enqueue_style( 'finance-consultr-google-fonts', '//fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700', false );
	}
endif;
add_action( 'wp_enqueue_scripts', 'finance_consultr_enqueue_styles', 99 );