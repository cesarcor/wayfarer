<?php

add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

function wayfarer_scripts(){
    wp_enqueue_style( 'wayfarer-style', esc_url(get_template_directory_uri()).'/style.css' );
    wp_enqueue_style( 'bootstrap-style', esc_url(get_template_directory_uri()).'/assets/css/bootstrap.min.css' );
    wp_enqueue_style('roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;700&display=swap', false);
    wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()). '/assets/js/bootstrap.min.js', array('jquery') ,'',true);
}

add_action( 'wp_enqueue_scripts', 'wayfarer_scripts' );

//Register menu
function wayfarer_menu(){
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'wayfarer')
        )
    );
}
add_action('init', 'wayfarer_menu');

//Additional li class
function add_additional_class_on_li( $classes, $item, $args ) {
 
    if ( 'main-menu' === $args->theme_location ) {
        $classes[] = "nav-item";
    }
 
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'add_additional_class_on_li' , 10, 4 );