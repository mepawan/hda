<?php

class HdaFrontEnd{
	function __construct(){
		add_action( 'wp_enqueue_scripts', array($this,'hda_add_scripts') );
		add_action('wp_ajax_hdaccss', array($this,'hdaccss_callback'));
		add_action('wp_ajax_nopriv_hdaccss', array($this,'hdaccss_callback'));
	}
	
	function hda_add_scripts(){
		wp_enqueue_style( 'hda-style', get_template_directory_uri() . '/assets/css/custom-style.css' );
		$hda_theme_options = get_option( 'hda_theme_options' );
		$custom_css = "";
		if($hda_theme_options['primary_color']){
			//primary background color setup
			$custom_css .= ".primary-gb-color,header .main,.introduction section#fetch-form .tda-search__button, .introduction section#quick-search ul li a,.introduction #advanced-search a";
			$custom_css .= ",.sell-us-your-car form h5 span,.finance #rate-lock,.sell-us-your-car form .input-cell button.right";
			$custom_css .= "{background:".$hda_theme_options['primary_color'].";}";
			//primary border color setup
			$custom_css .= ".primary-border-color,.introduction section#quick-search ul li a,.introduction #advanced-search a,.finance #rate-lock,.sell-us-your-car form .input-cell button.right:hover ";
			$custom_css .= "{border-color:".$hda_theme_options['primary_border_color'].";}";
			//primary text color setup
			$custom_css .= ".primary-text-color,.sell-us-your-car form div.full h2,.sell-us-your-car form h5,.locations .wrapper .loc-visit span,.sell-us-your-car form .input-cell button.right:hover";
			$custom_css .= "{color:".$hda_theme_options['primary_color'].";}";
		}
               
        wp_add_inline_style( 'hda-style', $custom_css );
		
		//wp_enqueue_style( 'hda-customizer-css', admin_url( 'admin-ajax.php' ).'?action=hdaccss', array() );
		wp_enqueue_script("jquery");
		wp_enqueue_script( 'hda-script', get_template_directory_uri() . '/assets/js/custom-script.js', array('jquery') );
	}

}

global $HdaFrontEnd;
$HdaFrontEnd = new HdaFrontEnd();