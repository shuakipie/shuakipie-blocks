<?php
/**
 * Plugin Name:       ShuakiPie Custom Blocks
 * Plugin URI:        https://techshuakipie.com
 * Description:       A plugin for adding blocks to a theme.
 * Version:           1.0.0
 * Requires at least: 5.9
 * Requires PHP:      7.2
 * Author:            Udemy
 * Author URI:        https://techshuakipie.com
 * Text Domain:       shuakipie-blocks
 * Domain Path:       /languages
 */

if(!function_exists('add_action')) {
  echo 'Seems like you stumbled here by accident. 😛';
  exit;
}

// Setup
define('UP_PLUGIN_DIR', plugin_dir_path(__FILE__));

// Includes
include(UP_PLUGIN_DIR . 'includes/register-blocks.php');

// Hooks
add_action('init', 'up_register_blocks');