<?php

// Admin Bar for top padding
add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );
// excerpt support
add_post_type_support( 'page', 'excerpt' );


function custom_files() {
    // fonts
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Nunito:300,400,700|Rubik:300,400,700');
    //all styles
	wp_enqueue_style('bootstrap-reboot', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1');
    wp_enqueue_style('styles', get_stylesheet_uri(), array(), get_the_time('U'));
    //js
    // wp_enqueue_script("jquery");
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/scripts/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/scripts/parallax.min.js', array('jquery'), '1.5.0', true);
    wp_enqueue_script('scriptsjs', get_template_directory_uri() . '/scripts/scripts.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'custom_files');

//featured image support
add_theme_support( 'post-thumbnails' );


function remove_image_size_attributes( $html ) {
    return preg_replace( '/(width|height)="\d*"/', '', $html );
}

// Remove image size attributes from post thumbnails
add_filter( 'post_thumbnail_html', 'remove_image_size_attributes' );

// Remove image size attributes from images added to a WordPress post
add_filter( 'image_send_to_editor', 'remove_image_size_attributes' );

//allow svg for media upload
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
add_filter('upload_mimes', 'cc_mime_types');

function custom_menu() {
register_nav_menus(
    array(
    'nav-menu-main' => __( 'Primary', 'custom-menu' )
    )
);
}
add_action( 'init', 'custom_menu' );

function remove_menus(){
    remove_menu_page( 'edit-comments.php' );
    remove_menu_page( 'edit.php' );
  }
  add_action( 'admin_menu', 'remove_menus' );

// Register custom post type
function create_posttype() {
    register_post_type( 'works',
        array(
            'labels' => array(
                'name' => __( 'works' ),
                'singular_name' => __( 'work' ),
                "menu_name" => __( "Work", "" ),
                "add_new_item" => __( "Add new works", "" ),
                "edit_item" => __( "Edit works", "" ),
                "name_admin_bar" => __( "Works", "" ),
            ),
            'public' => true,
            'has_archive' => true,
            "menu_position" => 3,
            "menu_icon" => "dashicons-megaphone",
            'supports' => array( 'title', 'custom-fields', 'thumbnail'),
        )
    );
  }
// Hooking up our function to theme setup
  add_action( 'init', 'create_posttype' );
