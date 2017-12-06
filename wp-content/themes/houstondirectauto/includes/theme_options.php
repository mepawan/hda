<?php

class HdaThemeOptions{
	var $theme_options;
	function __construct(){
		add_action("admin_menu", array($this,"add_theme_menu_item"));
		add_action('admin_enqueue_scripts', array($this,'hda_theme_options_enqueue_scripts'));
		$this->theme_options = get_option( 'hda_theme_options' );
	}
	function theme_options_page(){
		if(isset($_POST['save_hda_theme_options']) && $_POST['save_hda_theme_options'] == 'yes'){
			update_option('hda_theme_options',$_POST['hda_theme_options']);
		}
		$hda_theme_options = get_option( 'hda_theme_options' );
		
		
		
	?>
		<style>
			.hda-theme-options-tbl{
				width:100%;
			}
			.hda-theme-options-left{
				width:75%;
				float:left;
			}
			.hda-theme-options-right{
				width:25%;
				float:left;
			}
			.hda-theme-options-tbl .label{
				width:150px;
			}
			.hda-theme-options-tbl .input{
				
			}
			.hda-theme-options-tbl input[type="text"]{
				min-width:50%;
			}
		</style>
		<div class="hda-theme-options-wrap">
			<h3>Theme Options</h3>
			<div class="hda-theme-options-left">
				<form id="form-hda-theme-options" action="" method="post" enctype="multipart/form-data">
					<input type="hidden" name="save_hda_theme_options" value="yes" />
					<table class="hda-theme-options-tbl">
						<tr>
							<td class="label"> <label>Logo</label> </td>
							<td class="input">
								<input type="text" id="logo_url" name="hda_theme_options[logo]" value="<?php echo esc_url( $hda_theme_options['logo'] ); ?>" />
								<input id="upload_logo_button" type="button" class="button" value="<?php _e( 'Upload Logo', 'houstondirectauto' ); ?>" />
								<span id="logo_preview"></span>
							</td>
						</tr>
						<tr>
							<td class="label"> <label>Favicon </label> </td>
							<td class="input">
								<input type="text" id="favicon_url" name="hda_theme_options[favicon]" value="<?php echo esc_url( $hda_theme_options['favicon'] ); ?>" />
								<input id="upload_favicon_button" type="button" class="button" value="<?php _e( 'Upload Favicon', 'houstondirectauto' ); ?>" />
								<span id="favicon_preview"></span>
							</td>
						</tr>
						<tr>
							<td class="label"> <label>Primary Color </label> </td>
							<td class="input">
								<input type="text" id="primary_color" placeholder="Color Code ie. #ad4c4f" name="hda_theme_options[primary_color]" value="<?php echo  $hda_theme_options['primary_color'] ; ?>" />
								<span id="primary_color_preview"></span>
							</td>
						</tr>
						<tr>
							<td class="label"> <label>Primary Border Color </label> </td>
							<td class="input">
								<input type="text" id="primary_border_color" placeholder="Color Code ie. #ad4c4f" name="hda_theme_options[primary_border_color]" value="<?php echo  $hda_theme_options['primary_border_color'] ; ?>" />
								<span id="primary_border_color_preview"></span>
							</td>
						</tr>
						
						<tr>
							<td colspan=2>
								<p class="submit">
									<input name="hda_theme_options[submit]" id="submit_options_form" type="submit" class="button-primary" value="<?php esc_attr_e('Save Settings', 'houstondirectauto'); ?>" />
									<input name="hda_theme_options[reset]" type="submit" class="button-secondary" value="<?php esc_attr_e('Reset Defaults', 'houstondirectauto'); ?>" />
								</p>
							</td>
						</tr>
					</table>
				</form>
			</div>
			<div class="hda-theme-options-right">
			
			</div>
			<div class="clearfix clear"></div>
		</div>
	<?php	
	}

	function add_theme_menu_item() {
		//add_menu_page("Theme Options", "Theme Options", "manage_options", "hda-theme-options", "theme_options_page", null, 99);
		add_theme_page('Theme Options', 'Theme Options', 'edit_theme_options', 'hda-theme-options', array($this, 'theme_options_page'));
	}
	
	function hda_theme_options_enqueue_scripts() {
		wp_register_script( 'wptuts-upload', get_template_directory_uri() .'/assets/js/hda-upload.js', array('jquery','media-upload','thickbox') );
		if ( 'appearance_page_hda-theme-options' == get_current_screen() -> id ) {
			wp_enqueue_script('jquery');
			wp_enqueue_script('thickbox');
			wp_enqueue_style('thickbox');
			wp_enqueue_script('media-upload');
			wp_enqueue_script('wptuts-upload');
		}
	}
	
}
global $hdaThemOptions;
$hdaThemOptions = new HdaThemeOptions();