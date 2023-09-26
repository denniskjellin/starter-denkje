<?php

/**
 * Class: ACF option page
 *
 * @author Dennis Kjellin 
 * @package Starter Denkje
 */

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'    => 'Theme settings',
        'menu_title'    => 'Theme settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    // Footer 
    acf_add_options_sub_page(array(
        'page_title'    => 'Footer',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));

    // hero-image
    acf_add_options_sub_page(array(
        'page_title'    => 'Hero image',
        'menu_title'    => 'Hero image',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}