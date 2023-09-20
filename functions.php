<?php


// Register Bootstrap 5 Nav Walker
if (!function_exists('register_navwalker')) :
    function register_navwalker()
    {
        require_once('inc/class-bootstrap-5-navwalker.php');
        register_nav_menu('main-menu', 'Main menu');
    }
endif;
add_action('after_setup_theme', 'register_navwalker');

/*-------------------------------------------------------------
	# Requirements
	--------------------------------------------------------------*/

// Add CSS/JS Sripts
require get_template_directory() . '/inc/scripts.php';
