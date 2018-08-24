<?php
/**
 *
 * @link http://appseed.io/
 * @since 1.0.0
 * @package Sofia's Gutenberg Boilerplate
 *
 * Plugin Name: Gutenberg Boilerplate Block
 * Plugin URI: http://appseed.io/
 * Description: My Gutenberg Boilerplate Block created for the Gutenberg content editor.
 * Author: Sofia Atsalou
 * Author URI: http://appseed.io/
 * Version: 1.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

function gutenberg_boilerplate_block() {
    wp_register_script(
        'gutenberg-boilerplate-es5-step02-editor',
        plugins_url( 'block/block.js', __FILE__ ),
        array( 'wp-blocks', 'wp-element' )
    );
    wp_register_style(
        'gutenberg-boilerplate-es5-step02-editor',
        plugins_url( 'block/editor.css', __FILE__ ),
        array( 'wp-edit-blocks' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'block/editor.css' )
    );
    wp_register_style(
      'gutenberg-boilerplate-es5-step02-frontend', // Handle.
      plugins_url( 'block/style.css', __FILE__ ), // Block editor CSS.
      array( 'wp-edit-blocks' )
    );

    register_block_type( 'gutenberg-boilerplate-es5/hello-world-step-02', array(
        'editor_script' => 'gutenberg-boilerplate-es5-step02-editor',
        'editor_style'  => 'gutenberg-boilerplate-es5-step02-editor',
        'style' => 'gutenberg-boilerplate-es5-step02-frontend',
    ) );
}
add_action( 'init', 'gutenberg_boilerplate_block' );
