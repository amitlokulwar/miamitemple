<?php

/* *********************************************************************************************
 PLEASE DO NOT DELETE THIS FUNCTION BECAUSE THIS FUNCTION IS CALLING CHILD THIME'S CSS FILE
********************************************************************************************* */

function swm_load_child_themestyles () {
	if (!is_admin()) {
		$template_uri = get_template_directory_uri();
		$stylesheet_uri = get_stylesheet_directory_uri();			

		wp_register_style('child-theme-style', $stylesheet_uri . '/child-theme-style.css', '', '1.0');	

		wp_enqueue_style('child-theme-style');
	
	}
}
add_action('wp_enqueue_scripts', 'swm_load_child_themestyles');