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
 * Function definition
 * Let’s review the function parameters and see what we can do:
 
 * register_rest_route(
 * 	$namespace, 
 * 	$route, 
 * 	$args, 
 * 	$override
 * );
 * namespace: a required string which should be the same for all of your routes in the api you are creating
 * route: the required string for the singular API endpoint, which would include some of the following methods: GET, POST, PUT, DELETE
 * args: optional array of options or array of array of options (we’ll go over this in detail)
 * override: optional true or false. 
 * True will replace an existing route while 
 * false will merge it and override any duplicate methods (defaults to false, so you can normally omit it)
 * 
 * Registering a route  
 * 
 * To register a route, we need to call it inside of the rest_api_init hook.  
 * 
 * The first argument is the namespace. 
 * It’s important to note that your namespace should not include a beginning or trailing slash, 
 * and should be composed of your namespace and version number (for example, WordPress’s built-in routes use wp/v2).
 * 
 * Next, we will create our route name. 
 * This will be the last part of the URL we call to access this route. 
 * Because this is a URL, you should name it the way you would see a URL 
 * (dashes instead of underscores, etc) and avoid characters like , % [ ] { } # ( ) * & and spaces.
 * 
 * Finally, we add our args.  
 * Because there are multiple methods that seem very similar (POST vs PUT etc), 
 * WordPress provides some constants as part of the WP_REST_Server class to make your method names more clear.  
 * 
 */
add_action('rest_api_init', 'register_test_route');

function register_test_route() {
	register_rest_route(
		'v1/posts',
		'my-endpoint',
		array(
			'methods' => WP_REST_Server::READABLE,
			'callback' => 'callback_function',
			'permission_callback' => '__return_true'
		)
	);
}

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


