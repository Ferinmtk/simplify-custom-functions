<?php
/**
 * Plugin Name: Simplify Custom Functions
 * Description: A custom plugin for adding functionality scripts styles and GF integrations.
 * Version: 1.1
 * Author: Ferrin
 */


// Enqueue scripts
add_action('wp_enqueue_scripts', 'simplify_enqueue_scripts');
function simplify_enqueue_scripts() {
    wp_enqueue_script(
        'simplify-custom-js',
        plugin_dir_url(__FILE__) . 'assets/custom.js',
        array('jquery'),
        '1.1',
        true
    );
}

// Enqueue styles
add_action('wp_enqueue_scripts', 'simplify_enqueue_styles');
function simplify_enqueue_styles() {
    wp_enqueue_style(
        'simplify-custom-css',
        plugin_dir_url(__FILE__) . 'assets/custom.css',
        array(),
        '1.1',
        'all'
    );
}

// Add message above Gravity Form
add_filter('gform_pre_render', 'simplify_message_above_form');
add_filter('gform_pre_validation', 'simplify_message_above_form');
add_filter('gform_pre_submission_filter', 'simplify_message_above_form');
add_filter('gform_admin_pre_render', 'simplify_message_above_form');

function simplify_message_above_form($form) {
    echo '<div style="padding:10px;background:#e0f7ff;border:1px solid #0073aa;margin-bottom:15px;border-radius:5px;">
            <strong>Welcome  please fill out the form carefully.</strong>
        </div>';
    return $form;
}
