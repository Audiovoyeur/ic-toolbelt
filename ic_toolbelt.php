<?php
/*
Plugin Name: Ic Toolbelt 
Plugin URI: http://yomammashouse.org
Description: Ic Toolbelt 
Version: 0.0.0.0.1
Author: AudioVoyeur (your name here)
Author URI: http://pieter-brink.co.za
License: WTFever man  
*/



//************* Template Name Print ***************

add_action('wp_head','show_template');
	function show_template() {
	global $template;
	echo '<style>
	#ict_templatenotice {
		
		position:fixed;
    	z-index: 99999;

    	bottom: 20px;
        right: 35%;

    	padding: 2px;
    	border-radius: 8px;

        font-size: 70%;
    	
    	background-color: black;
    	color: white;
    }
    </style>';
	echo '<div id="ict_templatenotice">';
	print_r($template);
	echo '</div>';
}

?>
