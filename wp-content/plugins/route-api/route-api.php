<?php

/**
 *
 * @link              https://zelycode.com
 * @since             1.0.0
 * @package           Route_Api
 *
 * @wordpress-plugin
 * Plugin Name:       RouteAPI
 * Plugin URI:        https://vektorwebsolutions.com
 * Description:       This is a test assignment for Degordian, API route to list blog posts
 * Author:            Zelyco Steve
 * Author URI:        https://zelycode.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       route-api
 * Domain Path:       /languages
 */

/**
 * 
 */
add_action('rest_api_init', 'vvs_register_test_routes');

function vvs_register_test_routes() {
	register_rest_route(
		'v1', // namespace  
		'posts', // route name, endpoint, the last part of the URL we call to access this route  
		array(
			'methods' => WP_REST_Server::READABLE, // methods: GET  
			'callback' => 'postSearchResults',
			'permission_callback' => '__return_true' // we create a public route  
		) // args 
	);
}

/**
 * The callback function for our route is a normal PHP function, 
 * but it receives a full $request object as it’s parameter.
 * The $request parameter is a WP_Rest_Request instance and 
 * can contain body data, url parameters, and more.  
 */
// function postSearchResults($request) {
function postSearchResults() {
	$blog	=	new WP_Query(array(
		'post_type'	=>	'post'
	));

	$blogResults = array();

	while($blog->have_posts()) {
		$blog->the_post();
		array_push($blogResults, get_the_ID(), get_the_title(), get_the_excerpt(), get_the_content(), get_the_date());
	}

	return $blogResults;

} 
// 	else {
// 	return new WP_Error('missing_fields', 'please include name as a parameter');
// }

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ROUTE_API_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-route-api-activator.php
 */
function activate_route_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-route-api-activator.php';
	Route_Api_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-route-api-deactivator.php
 */
function deactivate_route_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-route-api-deactivator.php';
	Route_Api_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_route_api' );
register_deactivation_hook( __FILE__, 'deactivate_route_api' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-route-api.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_route_api() {

	$plugin = new Route_Api();
	$plugin->run();

}
run_route_api();


