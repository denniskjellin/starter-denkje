<?php

/**
 * StarterTheme functions and definitions
 *
 * @author Dennis Kjellin
 * @package StarterTheme
 */

// Register Bootstrap 5 Nav Walker
if (!function_exists('register_navwalker')) :
    function register_navwalker()
    {
        require_once('inc/class-bootstrap-5-navwalker.php');
        register_nav_menu('main-menu', 'Main menu');
    }
endif;
add_action('after_setup_theme', 'register_navwalker');

// Custom images
add_image_size('heroImage', 1700, 700, true);


// Add theme support
add_theme_support( 'post-thumbnails' );

/*-------------------------------------------------------------
# Requirements
--------------------------------------------------------------*/

// Include scripts
require get_template_directory() . '/inc/scripts.php';
require get_template_directory() . '/lib/acf-blocks/class-admin-option-page.php';
require get_template_directory() . '/lib/custom/page-banner.php';
require get_template_directory() . '/lib/custom/hero-image.php';
require get_template_directory() . '/lib/custom/metabox.php';