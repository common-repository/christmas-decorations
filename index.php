<?php
/* Plugin Name: Christmas Decorations
 * Plugin URI: http://www.sanditsolution.com/
 * Description: Decorate your site for christmas. 
 * Version: 01.04.01
 * Author:Siddharth Singh
 * Author URI:http://www.sanditsolution.com/about.html
 * License: GPLv2 or later
 *License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */  
include_once dirname( __FILE__ ) . '/html_container.php'; include_once dirname( __FILE__ ) . '/including_js_css.php'; 
//Add action link start
add_filter( 'plugin_action_links', 'om_christmas_decorations_add_action_plugin', 10, 5 ); 
function om_christmas_decorations_add_action_plugin( $actions, $plugin_file ){static $plugin; if(!isset($plugin))$plugin = plugin_basename(__FILE__); 
if ($plugin == $plugin_file) { $more_product = array('more product' => '<a href="http://www.sanditsolution.com/shops/">' . __('More Product', 'General') . '</a>');$site_link = array('support' => '<a href="http://www.sanditsolution.com/contact.html" target="_blank">Support</a>');
$became_client = array('became client' => '<a href="http://doc.sanditsolution.com/register/" target="_blank">Became Client</a>');
$actions = array_merge($more_product, $actions);$actions = array_merge($site_link, $actions);$actions = array_merge($became_client, $actions);
}return $actions;}?>