<?php

/* Custom Post Type Start */
    function create_posttype() {
    register_post_type( 'involved',
    // CPT Options
    array(
      'labels' => array(
       'name' => __( 'involved' ),
       'singular_name' => __('Involved' )
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'involved'),
     )
    );
    }
    // Hooking up our function to theme setup
    add_action( 'init', 'create_posttype' );
    /* Custom Post Type End */