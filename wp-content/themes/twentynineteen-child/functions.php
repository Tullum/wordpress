<?php

/*add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_styles( 'child-style', get_stylesheet_uri(),
        array ( 'parenthandle' ),
        wp_get_theme()->get('Version') 
    ); 
}
*/
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles(){
    $parenthandle ='parent-style';
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',
        array(),
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array($parenthandle ),
        $theme->get('Version')
    );
}

function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

 //Custom Post Type
 
function medarbejder_post_type() {
    $labels =array(
        'name' => __( 'Medarbejdere' ),
        'singular_name' => __( 'Medarbejder' ),
        'menu_name' => __( 'Medarbejdere' ),
        'parent_item_colon' => __( 'Parent Medarbejder' ),
        'all_items' => __( 'Alle Medarbjdere' ),
        'view_item' => __( 'Se Medarbejder' ),
        'add_new_item' => __( 'Tilføj ny Medarbejder' ),
        'add_new' => __( 'Tilføj ny' ),
        'edit_item' => __( 'Rediger Medarbejder' ),
        'update_item' => __( 'Updater Medarbejder' ),
        'search_items' => __( 'Søg efter Medarbejder' ),
        'not_found' => __( 'Ikke fundet' ),
        'not_found_in_trach' => __( 'Ikke fundet i affald' )
    );
    $args = array(
        'label' => __( 'medarbejdere' ),
        'labels' => $labels,
        'public' => true,
        'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
    );
    register_post_type( 'medarbejdere', $args );
}

add_action( 'init', 'medarbejder_post_type', 0 );

//Taxonomy

add_action( 'init', 'medarbejder_afdelinger_taxonomy', 0 );

function medarbejder_afdelinger_taxonomy() {
    $labels = array(
        'name' => _x( 'Afdelinger', 'taxonomy general name' ),
        'singular_name' => _x( 'Afdeling', 'taxonomy singular name' ),
        'search_items' => __( 'Søg Afdelinger' ),
        'all_items' => __( 'Alle Afdelinger' ),
        'parent_item' => __( 'Parent Afdeling' ),
        'parent_item_colon' => __( 'Parent Afdeling:' ),
        'edit_item' => __( 'Rediger Afdeling' ),
        'update_item' => __( 'Updater Afdeling' ),
        'add_new_item' => __( 'Tilføj ny Afdeling' ),
        'new_item_name' => __( 'Nyt Afdelingsd navn' ),
        'menu_navn' => __( 'Afdelinger' )
    );

    register_taxonomy('afdelinger', array('medarbejdere'),array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'afdeling')
    ));
}