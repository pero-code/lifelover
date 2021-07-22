<?php

function lifetema_theme_setup(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'lifetema_theme_setup' );

// umesto after setap thema moze init.. Objasnjenje????


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function lifetema_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'lifetema_custom_excerpt_length', 999 );

// 999???

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function lifetema_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'lifetema_excerpt_more' );

