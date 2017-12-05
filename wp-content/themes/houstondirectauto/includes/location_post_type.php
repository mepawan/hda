<?php


function create_location_post_type() {
		register_post_type( 'location',
			array(
				'labels' => array(
					'name' => __( "Locations" ),
					'singular_name' => __( 'Location' ),
					'add_new_item' => 'Add New Location',
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'location'),
				'show_in_menu' => TRUE,
				'capability_type'    => 'post',
				'supports'           => array( 'title', 'thumbnail', 'tag' ) // these are default fields. 
				
			)
		);
		register_taxonomy_for_object_type('post_tag','location');
}
function create_custom_post_types(){
	create_location_post_type();
}
add_action( 'init', 'create_custom_post_types', 1, 10 );
//<img width="600" src="https://maps.googleapis.com/maps/api/staticmap?center=Albany,+NY&zoom=13&scale=1&size=600x300&maptype=roadmap&format=png&visual_refresh=true" alt="Google Map of Albany, NY">

add_action( 'add_meta_boxes', 'location_post_type_metabox' );
function location_post_type_metabox() {  // creating custom fields using metaboxes.
	add_meta_box( 'location-post-type-subtitle', __( 'Sub Title', 'subtitle' ), 'location_post_type_subtitle_metabox_content', 'location', 'normal', 'default' );
	add_meta_box( 'location-post-type-address', __( 'Location Address', 'address' ), 'location_post_type_address_metabox_content', 'location', 'normal', 'default' );
	add_meta_box( 'location-post-type-contact', __( 'Contact Number', 'contact' ), 'location_post_type_contact_metabox_content', 'location', 'normal', 'default' );
	add_meta_box( 'location-post-type-fax', __( 'Fax Number', 'fax' ), 'location_post_type_fax_metabox_content', 'location', 'normal', 'default' );
	add_meta_box( 'location-post-type-email', __( 'Email Address', 'email' ), 'location_post_type_email_metabox_content', 'location', 'normal', 'default' );
	add_meta_box( 'location-post-type-officehours', __( 'Office Hours', 'officehours' ), 'location_post_type_officehours_metabox_content', 'location', 'normal', 'default' );
	//add_meta_box( 'coin-post-type-order', __( 'Sequense Order', 'coin-order' ), 'coin_post_type_order_metabox_content', 'coin', 'side', 'default' );
	//add_meta_box( 'coin-post-type-coinid', __( 'Coin Id', 'coin-coinid' ), 'coin_post_type_coinid_metabox_content', 'coin', 'side', 'default' );
	//add_meta_box( 'coin-post-type-facts', __( 'Coin Facts', 'coin-facts' ), 'coin_post_type_facts_metabox_content', 'coin', 'normal', 'default' );
	//add_meta_box( 'coin-post-type-history', __( 'Coin History', 'coin-history' ), 'coin_post_type_history_metabox_content', 'coin', 'normal', 'default' );
	//add_meta_box( 'coin-post-type-news-useful-links', __( 'News and Useful Links', 'news-useful-links' ), 'coin_post_type_news_useful_links_metabox_content', 'coin', 'normal', 'default' );
	//add_meta_box( 'coin-post-type-logo', __( 'Coin Logo', 'coin-logo' ), 'coin_post_type_logo_metabox_content', 'coin', 'normal', 'default' );
}
function location_post_type_subtitle_metabox_content(){
	global $post;
		$subtitle = get_post_meta( $post->ID, 'subtitle', true );
	?>
		<label>
			<input type="text" id="location-subtitle-metabox" name="subtitle" value="<?php echo $subtitle;?>" style="width:80%;padding:10px 5px;" />
		</label>
	<?php
}	

function location_post_type_address_metabox_content(){
	global $post;
		$address = get_post_meta( $post->ID, 'address', true );
	?>
		<label>
			<textarea id="location-address-metabox" name="address" style="width:80%;padding:10px 5px;" ><?php echo $address;?></textarea>
		</label>
	<?php
}
function location_post_type_officehours_metabox_content(){
	global $post;
		$officehours = get_post_meta( $post->ID, 'officehours', true );
	?>
		<label>
			<textarea id="location-officehours-metabox" name="officehours" style="width:80%;padding:10px 5px;" ><?php echo $officehours;?></textarea>
		</label>
	<?php
}


function location_post_type_contact_metabox_content(){
	global $post;
		$contact = get_post_meta( $post->ID, 'contact', true );
	?>
		<label>
			<input type="text" id="location-contact-metabox" name="contact" value="<?php echo $contact;?>" style="width:80%;padding:10px 5px;" />
		</label>
	<?php
}

function location_post_type_fax_metabox_content(){
	global $post;
		$fax = get_post_meta( $post->ID, 'fax', true );
	?>
		<label>
			<input type="text" id="location-fax-metabox" name="fax" value="<?php echo $fax;?>" style="width:80%;padding:10px 5px;" />
		</label>
	<?php
}
function location_post_type_email_metabox_content(){
	global $post;
		$email = get_post_meta( $post->ID, 'email', true );
	?>
		<label>
			<input type="email" id="location-email-metabox" name="email" value="<?php echo $email;?>" style="width:80%;padding:10px 5px;" />
		</label>
	<?php
}




//SAVE - Location Metaboxes

add_action( 'save_post', 'coin_save_metabox_values' );

function coin_save_metabox_values($post_id){
	global $post_type;
	if ( $post_type == 'location'){ 
		
		if(isset($_POST['address'])){
			$subtitle = $_POST['subtitle'];
			update_post_meta($post_id, 'subtitle', $subtitle);
		}
		if(isset($_POST['address'])){
			$address = $_POST['address'];
			update_post_meta($post_id, 'address', $address);
		}
		if(isset($_POST['officehours'])){
			$officehours = $_POST['officehours'];
			update_post_meta($post_id, 'officehours', $officehours);
		}
		
		
		if(isset($_POST['contact'])){
			$contact = $_POST['contact'];
			update_post_meta($post_id, 'contact', $contact);
		}
		if(isset($_POST['fax'])){
			$fax = $_POST['fax'];
			update_post_meta($post_id, 'fax', $fax);
		}
		if(isset($_POST['email'])){
			$email = $_POST['email'];
			update_post_meta($post_id, 'email', $email);
		}
	}
}