<?php
/**
 * Enfold Child Theme - Starter
 *
 * @since Enfold Starter 1.0
 *
 * Add your own functions here. You can also copy some of the theme functions into this file. 
 * Wordpress will use those functions instead of the original functions then.
 * 
 * @link http://www.kriesi.at/documentation/enfold/using-a-child-theme/
 */


/**
 *	Add filter to add or replace Enfold ALB shortcodes with new folder contents
 *	
 *	Note that the shortcodes must be in the same format as those in 
 *	enfold/config-templatebuilder/avia-shortcodes
 *
 *	@link http://www.kriesi.at/documentation/enfold/add-new-or-replace-advanced-layout-builder-elements-from-child-theme/
 */

add_filter('avia_load_shortcodes', 'avia_include_shortcode_template', 15, 1);
function avia_include_shortcode_template($paths)
{
	$template_url = get_stylesheet_directory();
    	array_unshift($paths, $template_url.'/shortcodes/');

	return $paths;
}

/**
 * Disable these wordpress head details
 */
remove_action('wp_head','wp_generator');
remove_action('wp_head','wp_shortlink_wp_head' );
remove_action('wp_head','adjacent_posts_rel_link_wp_head' );
remove_action('wp_head','rsd_link');
remove_action('wp_head','wlwmanifest_link');

/**
 * Register a print css style sheet so the events page can be pretty printed.
 */
// http://codex.wordpress.org/Styling_for_Print
// http://wordpress.stackexchange.com/questions/111099/include-print-style-sheet
function bhaa_print_styles(){
	wp_enqueue_style(
	'bhaa-print-style',
	get_stylesheet_directory_uri().'/css/print-style.css',
	array(),
	'20130821',
	'print' // print styles only
	);
}
add_action( 'wp_enqueue_scripts', 'bhaa_print_styles' );

/**
 *	Turn on Custom CSS Class field for all Avia Layout Builder elements
 *	@link http://www.kriesi.at/documentation/enfold/turn-on-custom-css-field-for-all-alb-elements/
 */
add_theme_support('avia_template_builder_custom_css');