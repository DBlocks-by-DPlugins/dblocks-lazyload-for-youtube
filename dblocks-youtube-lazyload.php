<?php
/**
 * Plugin Name:       DBlocks YouTube Lazyload
 * Description:       Advanced HTML Block and Code Syntax Highlighterin in one
 * Requires at least: 6.5.2
 * Requires PHP:      7.0
 * Version:           1.0.1
 * Author:            DPlugins
 * * Author URI:      https://dplugins.com/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       dblocks-youtube-lazyload
 * @package           CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Define plugin URLs and PATHs
define( 'DBLOCKS_CODEPRO_DIR',	plugin_dir_path(__FILE__));
define( 'DBLOCKS_CODEPRO_PATH',	plugin_dir_path(__FILE__));
define( 'DBLOCKS_CODEPRO_URL',	plugin_dir_url(__FILE__));
define( 'DBLOCKS_CODEPRO_BASE',	plugin_basename(__FILE__));


// Include the components using the prefixed path constant
require_once DBLOCKS_CODEPRO_PATH . 'inc/block-registration.php';
require_once DBLOCKS_CODEPRO_PATH . 'inc/category.php';