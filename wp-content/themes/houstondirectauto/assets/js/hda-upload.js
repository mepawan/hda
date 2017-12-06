var hdato_media_type = null;
jQuery(document).ready(function($) {
    $('#upload_logo_button').click(function() {
		hdato_media_type = 'logo';
        tb_show('Upload a logo', 'media-upload.php?referer=hda-theme-options&type=image&TB_iframe=true&post_id=0', false);
        return false;
    });
	 $('#upload_favicon_button').click(function() {
		 hdato_media_type = 'favicon';
        tb_show('Upload a Favicon', 'media-upload.php?referer=hda-theme-options&type=image&TB_iframe=true&post_id=0', false);
        return false;
    });
	window.send_to_editor = function(html) {
		var image_url = $(html).prop('src'); //$('img',$(html)).prop('src');
		if(hdato_media_type == 'logo'){
			$('#logo_url').val(image_url);
		} else if(hdato_media_type == 'favicon'){
			$('#favicon_url').val(image_url);
		}
		tb_remove();
		hdato_media_type = null;
	}
});