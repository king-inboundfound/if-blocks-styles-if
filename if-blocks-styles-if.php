<?php
/*
 * Plugin Name: IF Blocks Styles Addon (InboundFound)
 * Description: Custom styles made specifically for InboundFound site.
 * Author: Inbound Found / David Rodrigues
 * Version: 1.0.0
 * GitHub Plugin URI: https://github.com/king-inboundfound/if-blocks-styles-if
 * Primary Branch: main
 * Text Domain: if-blocks-styles-if
 */
if (!defined('ABSPATH')) { return; }
function ifBlocksEnqueueScriptsIf() {
  wp_enqueue_style('if-blocks-styles-if', plugin_dir_url(__FILE__) . 'assets/css/style.css',
    array(), filemtime(__DIR__ . '/assets/css/style.css'));
};
add_action('wp_enqueue_scripts', 'ifBlocksEnqueueScriptsIf', 10);