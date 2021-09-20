<?php
/**
 * Plugin Name:       BLIKSEM Simple Slider
 * Description:       Plugin implementing BX Slider on Wordpress
 * Version:           1.0.0
 * Author:            Andre Nell
 * Requires at least  5.5
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) {
    exit;
}

 /* Enqueue CSS and JS files
==================================== */

add_action('wp_enqueue_scripts', 'bs_enqueue_styles');
function bs_enqueue_styles()
{
    // enqueue child styles
    wp_register_style('bx_slider_css', plugin_dir_url(__FILE__) . 'css/bxslider.css');
    wp_enqueue_style('bx_slider_css');

    // register scripts
    wp_register_script('bx_slider_js', plugin_dir_url(__FILE__) . 'js/bxslider.js', array('jquery'), '1.0', true);
    wp_register_script('rx_js', plugin_dir_url(__FILE__) . 'js/rx.js', array('jquery'), '1.0', true);
    
    // enqueue scripts
    wp_enqueue_script('bx_slider_js');
    wp_enqueue_script('rx_js');
}