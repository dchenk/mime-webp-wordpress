<?php
/*
Plugin Name: Mime WebP
Plugin URI: https://widerwebs.com
Description: Allow webp files to be uploaded
Version: 0.1
Author: Wider Webs
Author URI: https://widerwebs.com
License: MIT
*/

function mime_webp_upload($existing) {
	$existing['webp'] = 'image/webp';
	return $existing;
}

add_filter('mime_types', 'mime_webp_upload');
