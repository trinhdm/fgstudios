<?php

  // CUSTOM POST TYPES

  // 1. Films Portfolios
  //    a. Register
  //    b. Add Excerpt Columns
	//		c. Add Thumbnail custom column
	// 2. Meet the Dentists
	// 3. Meet the Team (Colleyville)
	// 4. Meet the Team (Bedford)
	// 5. Cosmetic Dentistry
	// 6. Preventative Dentistry
	// 7. Restorative Dentistry
	// 8. Patient Resources
	// 9. Customer Reviews


  // 1. Films PortfolioS
	add_action('init', 'films_portfolio_post_register');
	function films_portfolio_post_register(){
    $labels = array(
      'name' => _x('Portfolio', 'portfolio'),
      'singular_name' => _x('Portfolio', 'portfolio'),
      'add_new' => _x('Add New', 'portfolio'),
      'add_new_item' => __('Add New Portfolio Item'),
      'edit_item' => __('Edit Item'),
      'new_item' => __('New Item'),
      'view_item' => __('View Item'),
      'search_items' => __('Search Items'),
      'not_found' =>  __('No items found'),
      'not_found_in_trash' => __('No items found in Trash'),
      'parent_item_colon' => ''
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
			'menu_position'      => 6,
			'capability_type'    => 'page'
		);
		register_post_type('films-portfolio', $args);
	}

  register_taxonomy( 'film-portfolio-categories',
	array( 	'films-portfolio' ),
	array( 	'hierarchical' => true,
			'labels' => array('name'=>'Categories','add_new_item'=>'Add New Field'),
			'singular_label' => __( 'Field' ),
			'rewrite' => array( 'slug' => 'fields', // This controls the base slug that will display before each term
			                    'with_front' => false)
		 )
);


  add_action('init', 'photos_portfolio_post_register');
  function photos_portfolio_post_register(){
    $args = array(
      'public'             => true,
      'has_archive'        => true,
      'rewrite'            => array('slug'=>'photos-portfolio'),
      'hierarchical'       => true,
      'publicly_queryable' => true,
      'taxonomies'         => array( 'photos-portfolio' ),
      'supports'           => array('title','editor','thumbnail','page-attributes'),
      'labels'             => array(
                            'name' => 'Photos Portfolio'
                           ),
      'menu_position'      => 7,
      'capability_type'    => 'page'
    );
    register_post_type('photos-portfolio', $args);
  }


  add_action('init', 'designs_portfolio_post_register');
  function designs_portfolio_post_register(){
    $args = array(
      'public'             => true,
      'has_archive'        => true,
      'rewrite'            => array('slug'=>'designs-portfolio'),
      'hierarchical'       => true,
      'publicly_queryable' => true,
      'taxonomies'         => array( 'designs-portfolio' ),
      'supports'           => array('title','editor','thumbnail','page-attributes'),
      'labels'             => array(
                            'name' => 'Designs Portfolio'
                           ),
      'menu_position'      => 8,
      'capability_type'    => 'page'
    );
    register_post_type('designs-portfolio', $args);
  }
