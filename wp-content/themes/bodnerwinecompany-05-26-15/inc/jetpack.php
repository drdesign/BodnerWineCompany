<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package bodnerWineCompany-05-26-15
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function bodnerwinecompany_05_26_15_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'bodnerwinecompany_05_26_15_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function bodnerwinecompany_05_26_15_jetpack_setup
add_action( 'after_setup_theme', 'bodnerwinecompany_05_26_15_jetpack_setup' );

function bodnerwinecompany_05_26_15_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function bodnerwinecompany_05_26_15_infinite_scroll_render