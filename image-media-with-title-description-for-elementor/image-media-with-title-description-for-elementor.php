<?php

/**
 * Plugin Name: Elementor Image Media Carousel With Title and Description Addon
 * Description: Custom Elementor Addon for adding self-hosted image in the lightbox. Carousel With Title and Description.
 * Plugin URI:  https://github.com/Kanyanmanoj/image-media-with-title-description-for-elementor
 * Version:     1.0.0
 * Author:      Manoj Kumar
 * Author URI:  https://github.com/Kanyanmanoj
 * Text Domain: elementor-image-carousel-with-title-description-addon
 * 
 * Elementor tested up to: 3.7.0
 * Elementor Pro tested up to: 3.7.0
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

function elementor_image_carousel_with_title_description_addon()
{

  // Load plugin file
  require_once(__DIR__ . '/includes/plugin.php');

  // Run the plugin
  \Elementor_Image_Carousel_With_Title_Description_Addon\Plugin::instance();
}
add_action('plugins_loaded', 'elementor_image_carousel_with_title_description_addon');
