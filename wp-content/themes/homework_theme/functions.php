<?php
function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'my-custom-menu' => __( 'header nav' ),
            'extra-menu' => __( 'bottom nav' )
        )
    );
}
add_action( 'init', 'wpb_custom_new_menu' );
add_theme_support( 'post-thumbnails' );
add_post_type_support( 'my_news', 'thumbnail' );
function create_post_type() {
    register_post_type( 'my_news',
        array(
            'labels' => array(
                'name' => __( 'News' ),
                'singular_name' => __( 'News' ),

            ),
            'public' => true,
            'has_archive' => true
        )
    );
}
add_action( 'init', 'create_post_type' );