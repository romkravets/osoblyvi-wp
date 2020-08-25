<?php
if ( !defined( 'ABSPATH' ) ) exit;

if ( !function_exists( 'hestia_child_parent_css' ) ):
    function hestia_child_parent_css() {
        wp_enqueue_style( 'hestia_child_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap' ) );
	if( is_rtl() ) {
		wp_enqueue_style( 'hestia_child_parent_rtl', trailingslashit( get_template_directory_uri() ) . 'style-rtl.css', array( 'bootstrap' ) );
	}

    }
endif;
add_action( 'wp_enqueue_scripts', 'hestia_child_parent_css', 10 );

/**
 * Import options from Hestia
 *
 * @since 1.0.0
 */
function hestia_child_get_lite_options() {
	$hestia_mods = get_option( 'theme_mods_hestia' );
	if ( ! empty( $hestia_mods ) ) {
		foreach ( $hestia_mods as $hestia_mod_k => $hestia_mod_v ) {
			set_theme_mod( $hestia_mod_k, $hestia_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'hestia_child_get_lite_options' );

wp_enqueue_script( 'jquery' );

function hestia_excerpt_more_new( $more ) {
	global $post;
	if ( ( ( 'page' === get_option( 'show_on_front' ) ) ) || is_single() || is_archive() || is_home() ) {
		return '<a class="moretag" href="' . esc_url( get_permalink( $post->ID ) ) . '"> ' . esc_html__( 'Читати більше...', 'hestia-pro' ) . '</a>';
	}
	return $more;
}
add_filter( 'excerpt_more', 'hestia_excerpt_more_new', 20 );

add_filter( 'hestia_single_post_meta','child_hestia_single_post_meta_function' );

function child_hestia_single_post_meta_function() {
    return sprintf(
        /* translators: %1$s is Author name wrapped, %2$s is Date*/
        esc_html__( 'Опубліковано: %1$s публікація: %2$s', 'hestia-pro' ),
        /* translators: %1$s is Author name, %2$s is Author link*/
        sprintf(
            '<a href="%2$s" class="vcard author"><strong class="fn">%1$s</strong></a>',
            esc_html( get_the_author_meta( 'display_name', get_post_field ('post_author') ) ),
            esc_url( get_author_posts_url( get_post_field ('post_author') ) )
        ),
        /* translators: %s is Date */
        sprintf(
            '<time class="date updated published" datetime="%2$s">%1$s</time>',
            esc_html( get_the_time( get_option( 'date_format' ) ) ), esc_html( get_the_date( DATE_W3C ) )
        )
    );
}

function change_related_posts_title() {
   return 'Більше новин';
}
add_filter( 'hestia_related_posts_title', 'change_related_posts_title' );
