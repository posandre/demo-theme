<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Demo_theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function demo_theme_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'demo_theme_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function demo_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'demo_theme_pingback_header' );

/**
 *  Get Acf field value
 */
function demo_theme_get_acf_field($selector,  $post_id, $default = '') {
    if (empty($post_id)) $post_id = get_the_ID();

    if( !class_exists('ACF') ) return $default;

    $result = get_field($selector,$post_id);

    if (empty($result)) return $default;

    return $result;
}

/**
 *  Get Theme image urls
 */
function demo_theme_get_image_url($image_name) {
    return esc_attr(get_stylesheet_directory_uri() . '/images/' . $image_name);
}


/**
 *  Get picture section
 */
function demo_theme_the_picture_section($image_name, $image_name_mob, $alt_text = '') {
    if (
        !empty($image_name) && file_exists(get_stylesheet_directory()  . '/images/' . $image_name) &&
        !empty($image_name_mob) && file_exists(get_stylesheet_directory()  . '/images/' . $image_name_mob)
    ) {
        echo '
        <picture>
            <source media="(max-width: 1267px)" srcset="' . demo_theme_get_image_url($image_name_mob) . '">
            <img src="' . demo_theme_get_image_url($image_name) . '" alt="' . esc_attr($alt_text) . '" />
        </picture>        
        ';
    } else {
        echo '';
    }
}