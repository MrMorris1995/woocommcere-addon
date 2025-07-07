<?php
/*
Plugin Name: WooCommerce Addon
Description: Add a doublepoint to the product attributes (frontend and backend solution)
Version: 1.0
Author: Maurice Pauluhn
*/

defined('ABSPATH') or die('No script kiddies please!');

// Backend solution with php
add_filter('woocommerce_display_product_attributes', function($product_attributes, $product) {
    foreach ($product_attributes as &$attribute) {
        if (!empty($attribute['label']) && !str_ends_with($attribute['label'], ':')) {
            $attribute['label'] .= ':';
        }
    }
    return $product_attributes;
}, 10, 2);

// add js code for frontend solution
add_action('wp_enqueue_scripts', function() {
    if (is_product()) {
        wp_enqueue_script(
            'woocommerce-addon-script',
            plugin_dir_url(__FILE__) . 'js/woocommerce-addon.js',
            [],
            null,
            true
        );
    }
});
