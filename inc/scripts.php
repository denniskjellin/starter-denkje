<?php

/**
 * Enqueue scripts and styles
 *
 * @author Dennis Kjellin
 * @package StarterWP
 */
function enqueue_custom_styles()
{
    wp_enqueue_style('custom-theme-css', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

// Enqueue Bootstrap CSS and JavaScript
function enqueue_bootstrap()
{
    // Enqueue Bootstrap CSS
    wp_enqueue_style('starter-denkje', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');

    // Enqueue Bootstrap JavaScript
    wp_enqueue_script('start-denkje', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');
