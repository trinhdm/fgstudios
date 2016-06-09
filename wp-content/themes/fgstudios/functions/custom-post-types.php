<?php

  // CUSTOM POST TYPES

  // 1. Films Portfolio
  // 2. Photos Portfolio
  // 3. Designs Portfolio


  // 1. Films Portfolios
	add_action('init', 'films_portfolio_post_register');
	function films_portfolio_post_register(){
    $labels = array(
      'name'               => __('Portfolio', 'portfolio'),
      'singular_name'      => __('Portfolio', 'portfolio'),
      'add_new'            => __('Add New', 'portfolio'),
      'add_new_item'       => __('Add New Portfolio Item'),
      'edit_item'          => __('Edit Item'),
      'new_item'           => __('New Item'),
      'view_item'          => __('View Item'),
      'search_items'       => __('Search Items'),
      'not_found'          =>  __('No items found'),
      'not_found_in_trash' => __('No items found in Trash'),
      'parent_item_colon'  => ''
    );

		$args = array(
      'labels'             => $labels,
			'public'             => true,
      'show_ui'            => true,
			'rewrite'            => array('slug'=>'films-portfolio'),
      'capability_type'    => 'post',
			'hierarchical'       => false,
      'publicly_queryable' => true,
      'taxonomies'         => array( 'films-portfolio' ),
			'supports'           => array('title','editor','thumbnail','page-attributes'),
			'labels'             => array(
				                    'name' => 'Films Portfolio'
                    			 ),
			'menu_position'      => 5,
      'menu_icon'          => 'dashicons-video-alt',
			'capability_type'    => 'page'
		);
		register_post_type('films-portfolio', $args);
	}

  register_taxonomy( 'film-portfolio-categories',
	array( 	'films-portfolio' ),
	array( 	'hierarchical'   => true,
			    'labels'         => array(
              'name'          =>   'Categories',
              'add_new_item'  =>   'Add New Field'
          ),
			    'singular_label' => __( 'Field' ),
			    'rewrite'        => array(
              'slug'          => 'fields', // This controls the base slug that will display before each term
			        'with_front'    => false
          )
		  )
  );


  add_action('init', 'photos_portfolio_post_register');
  function photos_portfolio_post_register(){
    $labels = array(
      'name'               => __('Portfolio', 'portfolio'),
      'singular_name'      => __('Portfolio', 'portfolio'),
      'add_new'            => __('Add New', 'portfolio'),
      'add_new_item'       => __('Add New Portfolio Item'),
      'edit_item'          => __('Edit Item'),
      'new_item'           => __('New Item'),
      'view_item'          => __('View Item'),
      'search_items'       => __('Search Items'),
      'not_found'          =>  __('No items found'),
      'not_found_in_trash' => __('No items found in Trash'),
      'parent_item_colon'  => ''
    );

    $args = array(
      'labels'             => $labels,
      'public'             => true,
      'show_ui'            => true,
      'rewrite'            => array('slug'=>'photos-portfolio'),
      'capability_type'    => 'post',
      'hierarchical'       => false,
      'publicly_queryable' => true,
      'taxonomies'         => array( 'photos-portfolio' ),
      'supports'           => array('title','editor','thumbnail','page-attributes'),
      'labels'             => array(
                            'name' => 'Photos Portfolio'
                           ),
      'menu_position'      => 6,
      'menu_icon'          => 'dashicons-camera',
      'capability_type'    => 'page'
    );
    register_post_type('photos-portfolio', $args);
  }

  register_taxonomy( 'photo-portfolio-categories',
  array( 	'photos-portfolio' ),
  array( 	'hierarchical'   => true,
          'labels'         => array(
              'name'          =>   'Categories',
              'add_new_item'  =>   'Add New Field'
          ),
          'singular_label' => __( 'Field' ),
          'rewrite'        => array(
              'slug'          => 'fields', // This controls the base slug that will display before each term
              'with_front'    => false
          )
      )
  );


  add_action('init', 'designs_portfolio_post_register');
  function designs_portfolio_post_register(){
    $labels = array(
      'name'               => __('Portfolio', 'portfolio'),
      'singular_name'      => __('Portfolio', 'portfolio'),
      'add_new'            => __('Add New', 'portfolio'),
      'add_new_item'       => __('Add New Portfolio Item'),
      'edit_item'          => __('Edit Item'),
      'new_item'           => __('New Item'),
      'view_item'          => __('View Item'),
      'search_items'       => __('Search Items'),
      'not_found'          =>  __('No items found'),
      'not_found_in_trash' => __('No items found in Trash'),
      'parent_item_colon'  => ''
    );

    $args = array(
      'labels'             => $labels,
      'public'             => true,
      'show_ui'            => true,
      'rewrite'            => array('slug'=>'designs-portfolio'),
      'capability_type'    => 'post',
      'hierarchical'       => false,
      'publicly_queryable' => true,
      'taxonomies'         => array( 'designs-portfolio' ),
      'supports'           => array('title','editor','thumbnail','page-attributes'),
      'labels'             => array(
                            'name' => 'Designs Portfolio'
                           ),
      'menu_position'      => 7,
      'menu_icon'          => 'dashicons-admin-appearance',
      'capability_type'    => 'page'
    );
    register_post_type('designs-portfolio', $args);
  }

  register_taxonomy( 'design-portfolio-categories',
  array( 	'designs-portfolio' ),
  array( 	'hierarchical'   => true,
          'labels'         => array(
              'name'          =>   'Categories',
              'add_new_item'  =>   'Add New Field'
          ),
          'singular_label' => __( 'Field' ),
          'rewrite'        => array(
              'slug'          => 'fields', // This controls the base slug that will display before each term
              'with_front'    => false
          )
      )
  );
