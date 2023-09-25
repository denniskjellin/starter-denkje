<?php

/**
 * Enqueue scripts and styles
 *
 * @author Dennis Kjellin
 * @package StarterTheme
 */

/* Loading scripts*/
function enqueue_custom_styles()
{
    wp_enqueue_style('custom-theme-css', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
   
    // Cant get this to work atm, css purge removes important classes for some reason
    // wp_enqueue_style('custom-theme-min-css', get_template_directory_uri() . '/style.min.css', array(), '1.0', 'all');

    wp_enqueue_script('starter-denkje', get_template_directory_uri() . '/js/main.js');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');