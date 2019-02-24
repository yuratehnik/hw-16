<?php
/*--------------------NAVIGATION---------------------*/
function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'my-custom-menu' => __( 'header nav' ),
            'extra-menu' => __( 'bottom nav' )
        )
    );
}
add_action( 'init', 'wpb_custom_new_menu' );
/*--------------------POST THUMBNAINS---------------------*/
add_theme_support( 'post-thumbnails' );
/*--------------------POSTTYPE NEWS---------------------*/
add_post_type_support( 'news', 'thumbnail' );
function create_post_type() {
    register_post_type( 'news',
        array(
            'labels' => array(
                'name' => __( 'News' ),
                'singular_name' => __( 'News' ),

            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title','thumbnail','editor','page-attributes','excerpt'),
        )
    );
    register_post_type( 'partners',
        array(
            'labels' => array(
                'name' => __( 'Partnets' ),
                'singular_name' => __( 'Partners' ),

            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array('title','thumbnail','page-attributes'),
        )
    );
}
add_action( 'init', 'create_post_type' );
/*--------------------EXCERPT FOR POST---------------------*/
add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
    global $post;
    return '<a href="'. get_permalink($post) . '">Читать дальше...</a>';
}