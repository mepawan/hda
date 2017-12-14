<?php
/*   create auto post and for sale texonomy  with model texonomies*/
function auto() {
	$labels = array(
		'name'               => _x( 'autos', 'post type general name' ),
		'singular_name'      => _x( 'auto', 'post type singular name' ),
		'add_new'            => _x( 'Add New auto', 'book' ),
		'add_new_item'       => __( 'Add New auto' ),
		'edit_item'          => __( 'Edit auto' ),
		'new_item'           => __( 'New auto' ),
		'all_items'          => __( 'All auto' ),
		'view_item'          => __( 'View auto' ),
		'search_items'       => __( 'Search auto' ),
		'not_found'          => __( 'No Team auto' ),
		'not_found_in_trash' => __( 'No Team found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'auto'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our products and product specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
                
		'has_archive'   => true,
	);
	register_post_type( 'auto', $args );	
}
add_action( 'init', 'auto' );

function forsale_taxonomies() {
   $labels = array(
    'name'              => _x( 'for-sale Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'for-sale Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search for-sale Categories' ),
    'all_items'         => __( 'All for-sale Categories' ),
    'parent_item'       => __( 'Parent for-sale Category' ),
    'parent_item_colon' => __( 'Parent for-sale Category:' ),
    'edit_item'         => __( 'Edit for-sale Category' ), 
    'update_item'       => __( 'Update for-sale Category' ),
    'add_new_item'      => __( 'Add New for-sale Category' ),
    'new_item_name'     => __( 'New for-sale Category' ),
    'menu_name'         => __( 'for-sale Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'forsale_taxonomies', 'auto', $args );
}
add_action( 'init', 'forsale_taxonomies', 0 );
//--------------------- Add post an add form  ----------------------------------//
// ------------------------------model texoomies ---------------------------//
function model_taxonomies() {
   $labels = array(
    'name'              => _x( 'model Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'model Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search model Categories' ),
    'all_items'         => __( 'All model Categories' ),
    'parent_item'       => __( 'Parent model Category' ),
    'parent_item_colon' => __( 'Parent model Category:' ),
    'edit_item'         => __( 'Edit model Category' ), 
    'update_item'       => __( 'Update model Category' ),
    'add_new_item'      => __( 'Add New model Category' ),
    'new_item_name'     => __( 'New model Category' ),
    'menu_name'         => __( 'model Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'model_taxonomies', 'auto', $args );
}
add_action( 'init', 'model_taxonomies', 0 );

?>