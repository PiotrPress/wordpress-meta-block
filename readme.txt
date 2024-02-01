=== Meta Block ===
Contributors: PiotrPress
Tags: meta, post-meta, field, fields, meta-fields, post-meta-fields, metadata, custom-fields, dynamic-block, dynamic-blocks, php-block, php-blocks, fse, full-site-editing, gutenberg, block, blocks,
Requires at least: 6.4
Tested up to: 6.4
Stable tag: trunk
Requires PHP: 7.4
License: GPL v3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

This WordPress plugin adds a Meta Block which renders a selected post meta field.

== Description ==

This WordPress plugin adds a Meta Block which renders a selected post meta field.

= Filter =

Use `piotrpress/meta_block` filter to change rendered value of the block, e.g.:

`add_filter( 'piotrpress/meta_block', fn( $value, $key, $post_id ) => is_array( $value ) ? print_r( $value, true ) : $value, 10, 3 );`

== Screenshots ==

1. Meta Block in WordPress block editor view