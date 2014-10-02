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
 * Denis Mccaul - This is the code I added to add the sharing buttons to the bottom of pages
 */
add_filter('avf_template_builder_content', 'avia_add_social_toolbar_template_builder', 10, 1);
function avia_add_social_toolbar_template_builder($content = "") {
	$content .= avia_social_share_links(array(), false);
	$content .= '<div style="height:1px; margin-top:50px;" class="hr"></div>';
	return $content;
}

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
 * Show the bhaa logo on the login screen
 */
function bhaa_login_head() {
	echo '<style>
		body.login #login h1 a {
		background: url('.get_stylesheet_directory_uri().'/images/bhaa_logo_transparent.png) no-repeat center top transparent;
		height: 120px;
		width: 200px;
	}</style>';
}
add_action('login_head','bhaa_login_head');
function bhaa_login_headerurl( $url ) {
	return get_bloginfo( 'url' );
}
add_filter('login_headerurl','bhaa_login_headerurl');
function bhaa_login_headertitle() {
	return 'BHAA - For runners, by runners!';
}
add_filter('login_headertitle', 'bhaa_login_headertitle');

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
//add_action( 'wp_enqueue_scripts', 'bhaa_print_styles' );

/**
 *	Turn on Custom CSS Class field for all Avia Layout Builder elements
 *	@link http://www.kriesi.at/documentation/enfold/turn-on-custom-css-field-for-all-alb-elements/
 */
add_theme_support('avia_template_builder_custom_css');