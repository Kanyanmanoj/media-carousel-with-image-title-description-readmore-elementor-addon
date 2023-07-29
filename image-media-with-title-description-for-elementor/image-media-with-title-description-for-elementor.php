<?php

/**
 * Plugin Name: Elementor Image Media Carousel With Title and Description Addon
 * Description: Custom Elementor Pro Addon for adding title, description and read more button link in Media Carousel.
 * Plugin URI:  https://github.com/Kanyanmanoj/media-carousel-with-image-title-description-readmore-elementor-addon
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
