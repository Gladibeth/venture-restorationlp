<?php

add_theme_support('post-thumbnails');

// Agregar estilos
function add_styles() {
    // Estilos personalizados
    wp_enqueue_style('estilos-principales', get_template_directory_uri() . '/assets/css/styles.css');
    wp_enqueue_style('estilos-hamburguesa', get_template_directory_uri() . '/assets/css/hamburge.css');

    // Estilos de Slick Carousel
    wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('slick-carousel-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
}

add_action('wp_enqueue_scripts', 'add_styles');

// Agregar menu
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Configuración general',
		'menu_title' => 'Configuración general',
		'menu_slug' => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect' => false
	));

	acf_add_options_sub_page(array(
		'page_title' => 'Información principal',
		'menu_title' => 'Información principal',
		'parent_slug' => 'theme-general-settings',
	));
}

function register_main_menu() {
    register_nav_menu('main-menu', __('Menú Principal', 'venture'));
}

add_action('after_setup_theme', 'register_main_menu');


// Register Custom Post Type Service
function service() {

	$labels = array(
		'name'                  => _x( 'services', 'Post Type General Name', 'venture' ),
		'singular_name'         => _x( 'service', 'Post Type Singular Name', 'venture' ),
		'menu_name'             => __( 'Services', 'venture' ),
		'name_admin_bar'        => __( 'service', 'venture' ),
		'archives'              => __( 'Item Archives', 'venture' ),
		'attributes'            => __( 'Item Attributes', 'venture' ),
		'parent_item_colon'     => __( 'Parent Item:', 'venture' ),
		'all_items'             => __( 'All Items', 'venture' ),
		'add_new_item'          => __( 'Add New Item', 'venture' ),
		'add_new'               => __( 'Add New', 'venture' ),
		'new_item'              => __( 'New Item', 'venture' ),
		'edit_item'             => __( 'Edit Item', 'venture' ),
		'update_item'           => __( 'Update Item', 'venture' ),
		'view_item'             => __( 'View Item', 'venture' ),
		'view_items'            => __( 'View Items', 'venture' ),
		'search_items'          => __( 'Search Item', 'venture' ),
		'not_found'             => __( 'Not found', 'venture' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'venture' ),
		'featured_image'        => __( 'Featured Image', 'venture' ),
		'set_featured_image'    => __( 'Set featured image', 'venture' ),
		'remove_featured_image' => __( 'Remove featured image', 'venture' ),
		'use_featured_image'    => __( 'Use as featured image', 'venture' ),
		'insert_into_item'      => __( 'Insert into item', 'venture' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'venture' ),
		'items_list'            => __( 'Items list', 'venture' ),
		'items_list_navigation' => __( 'Items list navigation', 'venture' ),
		'filter_items_list'     => __( 'Filter items list', 'venture' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'venture' ),
		'description'           => __( 'Main services', 'venture' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-tools',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'service', 0 );


// Register Custom Post Type project
function project() {

	$labels = array(
		'name'                  => _x( 'projects', 'Post Type General Name', 'venture' ),
		'singular_name'         => _x( 'project', 'Post Type Singular Name', 'venture' ),
		'menu_name'             => __( 'Projects', 'venture' ),
		'name_admin_bar'        => __( 'project', 'venture' ),
		'archives'              => __( 'Item Archives', 'venture' ),
		'attributes'            => __( 'Item Attributes', 'venture' ),
		'parent_item_colon'     => __( 'Parent Item:', 'venture' ),
		'all_items'             => __( 'All Items', 'venture' ),
		'add_new_item'          => __( 'Add New Item', 'venture' ),
		'add_new'               => __( 'Add New', 'venture' ),
		'new_item'              => __( 'New Item', 'venture' ),
		'edit_item'             => __( 'Edit Item', 'venture' ),
		'update_item'           => __( 'Update Item', 'venture' ),
		'view_item'             => __( 'View Item', 'venture' ),
		'view_items'            => __( 'View Items', 'venture' ),
		'search_items'          => __( 'Search Item', 'venture' ),
		'not_found'             => __( 'Not found', 'venture' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'venture' ),
		'featured_image'        => __( 'Featured Image', 'venture' ),
		'set_featured_image'    => __( 'Set featured image', 'venture' ),
		'remove_featured_image' => __( 'Remove featured image', 'venture' ),
		'use_featured_image'    => __( 'Use as featured image', 'venture' ),
		'insert_into_item'      => __( 'Insert into item', 'venture' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'venture' ),
		'items_list'            => __( 'Items list', 'venture' ),
		'items_list_navigation' => __( 'Items list navigation', 'venture' ),
		'filter_items_list'     => __( 'Filter items list', 'venture' ),
	);
	$args = array(
		'label'                 => __( 'project', 'venture' ),
		'description'           => __( 'Main projects', 'venture' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-saved',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'project', 0 );


// Register Custom Post Type testimonial
function testimonial() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'venture' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'venture' ),
		'menu_name'             => __( 'Testimonials', 'venture' ),
		'name_admin_bar'        => __( 'testimonial', 'venture' ),
		'archives'              => __( 'Item Archives', 'venture' ),
		'attributes'            => __( 'Item Attributes', 'venture' ),
		'parent_item_colon'     => __( 'Parent Item:', 'venture' ),
		'all_items'             => __( 'All Items', 'venture' ),
		'add_new_item'          => __( 'Add New Item', 'venture' ),
		'add_new'               => __( 'Add New', 'venture' ),
		'new_item'              => __( 'New Item', 'venture' ),
		'edit_item'             => __( 'Edit Item', 'venture' ),
		'update_item'           => __( 'Update Item', 'venture' ),
		'view_item'             => __( 'View Item', 'venture' ),
		'view_items'            => __( 'View Items', 'venture' ),
		'search_items'          => __( 'Search Item', 'venture' ),
		'not_found'             => __( 'Not found', 'venture' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'venture' ),
		'featured_image'        => __( 'Featured Image', 'venture' ),
		'set_featured_image'    => __( 'Set featured image', 'venture' ),
		'remove_featured_image' => __( 'Remove featured image', 'venture' ),
		'use_featured_image'    => __( 'Use as featured image', 'venture' ),
		'insert_into_item'      => __( 'Insert into item', 'venture' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'venture' ),
		'items_list'            => __( 'Items list', 'venture' ),
		'items_list_navigation' => __( 'Items list navigation', 'venture' ),
		'filter_items_list'     => __( 'Filter items list', 'venture' ),
	);
	$args = array(
		'label'                 => __( 'testimonial', 'venture' ),
		'description'           => __( 'Main testimonials', 'venture' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-star-filled',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'testimonial', 0 );
