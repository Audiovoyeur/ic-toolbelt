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

// Thanks To wpmudev
// https://premium.wpmudev.org/blog/adding-admin-notices/?sul=b&utm_expid=3606929-90.6a_uo883STWy99lnGf8x1g.1&utm_referrer=https%3A%2F%2Fwww.google.co.za%2F

function my_error_notice() {
    ?>
    <div class="error notice">
        <p><?php _e( 'Please be sure to deactivate IC Toolbelt plugin before launch.', 'ic_toolbelt_idea_catalyst' ); ?></p>
    </div>
    <?php
}
add_action( 'admin_notices', 'my_error_notice' );

?>
