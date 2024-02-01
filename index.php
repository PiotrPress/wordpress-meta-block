<?php

/**
 * Plugin Name: Meta Block
 * Plugin URI: https://github.com/PiotrPress/wordpress-meta-block
 * Description: This WordPress plugin adds a Meta Block which renders a selected post meta field.
 * Version: 0.2.0
 * Requires at least: 6.4
 * Requires PHP: 7.4
 * Author: Piotr Niewiadomski
 * Author URI: https://piotr.press
 * License: GPL v3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: piotrpress-meta-block
 * Domain Path: /languages
 * Update URI: false
 */

defined( 'ABSPATH' ) or exit;

add_action( 'init', function() { register_block_type( __DIR__, [
    'render_callback' => fn( $attributes ) => $attributes[ 'key' ] ? apply_filters( 'piotrpress/meta_block', get_post_meta( get_the_ID(), $attributes[ 'key' ], true ), $attributes[ 'key' ], get_the_ID() ) : null,
    'attributes' => [
        'key' => [
            'type' => 'string',
            'default' => ''
        ]
    ]
] ); } );