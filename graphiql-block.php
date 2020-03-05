<?php
/**
 * Plugin Name:     GraphiQL block
 * Description:     It adds a block to add a GraphiQL client, to query the GraphQL server
 * Version:         0.1.0
 * Author:          Leonardo Losoviz
 * License:         MIT
 * Text Domain:     leoloso
 *
 * @package         leoloso
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}
define('GRAPHIQL_BLOCK_PLUGIN_URL', plugin_dir_url(__FILE__));
define('GRAPHIQL_BLOCK_VERSION', '0.1');

// Load Composer’s autoloader
require_once (__DIR__.'/vendor/autoload.php');

// Initialize this plugin
(new \Leoloso\GraphiQLBlockWPPlugin\Plugin())->init();
