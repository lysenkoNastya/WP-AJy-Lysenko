<?php
/**
 * Theme basic setup.
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_all_excerpts_get_more_link' ) ) {
    /**
     * Adds a custom read more link to all excerpts, manually or automatically generated
     *
     * @param string $post_excerpt Posts's excerpt.
     *
     * @return string
     */

    function understrap_all_excerpts_get_more_link($post_excerpt)
    {
        return $post_excerpt . '' . '' . __('', 'understrap') . '';
                }
}
add_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );