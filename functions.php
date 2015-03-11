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
 * Disable the ping back functions
-- http://fooplugins.com/prevent-wordpress-pingback-ddos/
-- http://wptavern.com/how-to-prevent-wordpress-from-participating-in-pingback-denial-of-service-attacks
 */
function remove_xmlrpc_pingback_ping( $methods ) {
   unset( $methods['pingback.ping'] );
   return $methods;
} ;
add_filter('xmlrpc_methods','remove_xmlrpc_pingback_ping',1,1);

/**
 * Register event manager custom format filter files
 */
function bhaa_em_formats_filter( $array ){
	$my_formats = array('dbem_event_list_item_format','dbem_single_event_format'); //the format you want to override, corresponding to file above.
	return $array + $my_formats; //return the default array and your formats.
}
add_filter('em_formats_filter', 'bhaa_em_formats_filter', 1, 1);

/**
 * Add wp_mail_from and wp_mail_from_name filters
 * http://wordpress.stackexchange.com/questions/9102/why-wont-wp-mail-let-me-set-the-from-header-when-plain-old-php-mail-will
 */
add_filter('wp_mail_from','bhaa_wp_mail_from');
function bhaa_wp_mail_from($content_type) {
	return 'info@bhaa.com';
}
add_filter('wp_mail_from_name','bhaa_wp_mail_from_name');
function bhaa_wp_mail_from_name($name) {
	return 'Business Houses Athletic Association';
}

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
 * Update the footer message.
 */
add_filter('kriesi_backlink','bhaa_backlink');
function bhaa_backlink() {
	return " Web Programming by <a href='https://github.com/emeraldjava/bhaawp' target='_blank'>emeraldjava</a>. Web Design and Development by 
	<a href='http://goonlinewebdesign.ie' target='_blank'>Go Online Web Design</a>";
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
 * Enfold contact form hack.
 */
function enfold_add_custom_hidden(){
?>
<script>
jQuery(window).load(function(){
jQuery('label.textare_label.hidden.textare_label_avia_text_1').removeClass('hidden');
});
</script>
<?php
}
add_action('wp_footer','enfold_add_custom_hidden');

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
?>