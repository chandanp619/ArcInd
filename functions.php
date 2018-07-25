<?php


define('HEADER_IMAGE_WIDTH',240);
define('HEADER_IMAGE_HEIGHT',240);
add_action( 'after_setup_theme', 'arcind_setup' );

function arcind_setup(){
    add_editor_style();
    add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
    add_theme_support( 'automatic-feed-links' );

    register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'arcind' ),
		'Secondary' => __( 'Secondary Navigation', 'arcind' ),
    ) );
    

    set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );
}

add_action( 'widgets_init', 'arcind_widgets_init' );
function arcind_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'arcind' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'arcind' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Column One', 'arcind' ),
        'id' => 'fc-1',
        'description' => __( '', 'arcind' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="footer-widgettitle">',
	'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Column Two', 'arcind' ),
        'id' => 'fc-2',
        'description' => __( '', 'arcind' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="footer-widgettitle">',
	'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Column Three', 'arcind' ),
        'id' => 'fc-3',
        'description' => __( '', 'arcind' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="footer-widgettitle">',
	'after_title'   => '</h2>',
    ) );

}