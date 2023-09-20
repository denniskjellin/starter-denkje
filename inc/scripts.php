<?php

/**
 * Enqueue scripts and styles
 *
 * @author Dennis Kjellin
 * @package StarterWP
 */
function enqueue_custom_styles()
{
    wp_enqueue_style('custom-theme-css', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

// Enqueue Bootstrap CSS and JavaScript
function enqueue_bootstrap()
{
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css');

    // Enqueue Bootstrap JavaScript
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '5.3.1', true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');
