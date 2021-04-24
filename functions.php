<?php
/**
 * cupimlom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cupimlom
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'cupimlom_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cupimlom_setup() {

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

	
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'cupimlom_setup' );



/**
 * Enqueue scripts and styles.
 */
function cupimlom_scripts() {
	// Styles
	wp_enqueue_style('main', get_template_directory_uri() .  '/assets/css/main.css', array(), _S_VERSION);
	wp_enqueue_style( 'cupimlom-style', get_stylesheet_uri(), array(), _S_VERSION );


	// Scripts
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION);

}
add_action( 'wp_enqueue_scripts', 'cupimlom_scripts' );

/**
 * 
 */
// require get_template_directory() . '/inc/custom-header.php';

