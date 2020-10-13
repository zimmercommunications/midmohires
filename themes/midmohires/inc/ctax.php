<?php

  //Register and Maintain CPTs
  class MidMo_CTAX{

    public static function init(){

      //Register CTaxes on init
      add_action('init', array('MidMo_CTAX', 'register_companies') );
      add_action('init', array('MidMo_CTAX', 'register_job_categories') );

    }

    // Register the companies custom taxonomy
    public static function register_companies(){

    	/**
    	 * Taxonomy: Companies.
    	 */

    	$labels = [
    		"name" => __( "Companies", "midmohires" ),
    		"singular_name" => __( "Company", "midmohires" ),
    		"menu_name" => __( "Companies", "midmohires" ),
    		"all_items" => __( "All Companies", "midmohires" ),
    		"edit_item" => __( "Edit Company", "midmohires" ),
    		"view_item" => __( "View Company", "midmohires" ),
    		"update_item" => __( "Update Company name", "midmohires" ),
    		"add_new_item" => __( "Add new Company", "midmohires" ),
    		"new_item_name" => __( "New Company name", "midmohires" ),
    		"parent_item" => __( "Parent Company", "midmohires" ),
    		"parent_item_colon" => __( "Parent Company:", "midmohires" ),
    		"search_items" => __( "Search Companies", "midmohires" ),
    		"popular_items" => __( "Popular Companies", "midmohires" ),
    		"separate_items_with_commas" => __( "Separate Companies with commas", "midmohires" ),
    		"add_or_remove_items" => __( "Add or remove Companies", "midmohires" ),
    		"choose_from_most_used" => __( "Choose from the most used Companies", "midmohires" ),
    		"not_found" => __( "No Companies found", "midmohires" ),
    		"no_terms" => __( "No Companies", "midmohires" ),
    		"items_list_navigation" => __( "Companies list navigation", "midmohires" ),
    		"items_list" => __( "Companies list", "midmohires" ),
    	];

    	$args = [
    		"label" => __( "Companies", "midmohires" ),
    		"labels" => $labels,
    		"public" => true,
    		"publicly_queryable" => true,
    		"hierarchical" => false,
    		"show_ui" => true,
    		"show_in_menu" => true,
    		"show_in_nav_menus" => true,
    		"query_var" => true,
    		"rewrite" => [ 'slug' => 'company', 'with_front' => true, ],
    		"show_admin_column" => false,
    		"show_in_rest" => true,
    		"rest_base" => "company",
    		"rest_controller_class" => "WP_REST_Terms_Controller",
    		"show_in_quick_edit" => false,
    			];
    	register_taxonomy( "company", [ "job" ], $args );

    }

    // Register the job category custom taxonomy
    public static function register_job_categories(){

    	/**
    	 * Taxonomy: Job Category.
    	 */

    	$labels = [
    		"name" => __( "Job Category", "midmohires" ),
    		"singular_name" => __( "Job Categories", "midmohires" ),
    		"menu_name" => __( "Job Category", "midmohires" ),
    		"all_items" => __( "All Job Category", "midmohires" ),
    		"edit_item" => __( "Edit Job Categories", "midmohires" ),
    		"view_item" => __( "View Job Categories", "midmohires" ),
    		"update_item" => __( "Update Job Categories name", "midmohires" ),
    		"add_new_item" => __( "Add new Job Categories", "midmohires" ),
    		"new_item_name" => __( "New Job Categories name", "midmohires" ),
    		"parent_item" => __( "Parent Job Categories", "midmohires" ),
    		"parent_item_colon" => __( "Parent Job Categories:", "midmohires" ),
    		"search_items" => __( "Search Job Category", "midmohires" ),
    		"popular_items" => __( "Popular Job Category", "midmohires" ),
    		"separate_items_with_commas" => __( "Separate Job Category with commas", "midmohires" ),
    		"add_or_remove_items" => __( "Add or remove Job Category", "midmohires" ),
    		"choose_from_most_used" => __( "Choose from the most used Job Category", "midmohires" ),
    		"not_found" => __( "No Job Category found", "midmohires" ),
    		"no_terms" => __( "No Job Category", "midmohires" ),
    		"items_list_navigation" => __( "Job Category list navigation", "midmohires" ),
    		"items_list" => __( "Job Category list", "midmohires" ),
    	];

    	$args = [
    		"label" => __( "Job Category", "midmohires" ),
    		"labels" => $labels,
    		"public" => true,
    		"publicly_queryable" => true,
    		"hierarchical" => false,
    		"show_ui" => true,
    		"show_in_menu" => true,
    		"show_in_nav_menus" => true,
    		"query_var" => true,
    		"rewrite" => [ 'slug' => 'job_category', 'with_front' => true, ],
    		"show_admin_column" => false,
    		"show_in_rest" => true,
    		"rest_base" => "job_category",
    		"rest_controller_class" => "WP_REST_Terms_Controller",
    		"show_in_quick_edit" => false,
    			];

    	register_taxonomy( "job_category", [ "job" ], $args );

    }

  }

  MidMo_CTAX::init();
