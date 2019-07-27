<?php
/**
 * Plugin Name: mdm-CPT
 * Description: CPT para mdm
 * Author: Aitor Méndez
 * Author URI: https://e451.net
 * Text Domain: mdm-CPT
 * License: MIT License
 * https://github.com/johnbillion/extended-cpts
 */

namespace mdm;

add_action( 'init', function() {

  load_textdomain('mdm-CPT', WPMU_PLUGIN_DIR . '/' .plugin_basename( dirname( __FILE__ ) ) . '/languages/mdm-CPT-' . get_locale() . '.mo');

  $args_production = [
      'name'                  => _x( 'Items CV', 'Post Type General Name', 'mdm-CPT' ),
      'singular_name'         => _x( 'Item CV', 'Post Type Singular Name', 'mdm-CPT' ),
      'menu_name'             => __( 'Items CV', 'mdm-CPT' ),
      'name_admin_bar'        => __( 'Item CV', 'mdm-CPT' ),
  ];

  $cols_production = [
    'post_author',
  ];

  $supports_production = [
    'author',
    'title',
    'editor',
  ];

  register_extended_post_type(
      'item_curri',
      [
        'show_in_rest' => true,
        'show_in_feed' => true,
        'labels'       => $args_production,
        'admin_cols'   => $cols_production,
        'supports'     => $supports_production,
      ]
  );


  register_extended_taxonomy( 'epigrafe',
    [
      'item_curri',
    ],
    [
      'meta_box' => 'simple',
      'hierarchical' => true,
  		'singular' => __( 'Epígrafe', 'mdm-CPT' ),
  		'plural'   => __( 'Epígrafes', 'mdm-CPT' ),
	   ]
  );

});