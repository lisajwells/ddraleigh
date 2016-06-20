<?php
//* Code goes here

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_action( 'wp_enqueue_scripts', 'ddraleigh_enqueue_scripts_styles' );
function ddraleigh_enqueue_scripts_styles() {

    wp_enqueue_style( 'ddraleigh-fonts', '//fonts.googleapis.com/css?family=Lato:300,700,300italic', array(), CHILD_THEME_VERSION );


}
