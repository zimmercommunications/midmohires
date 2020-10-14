<?php

  //Register and Maintain CPTs
  class MidMo_CPT{

    public static function init(){

      //Register CPTs on init
      add_action('init', array('MidMo_CPT', 'register_job') );

    }

    // Register the jobs custom post type
    public static function register_job(){

      	/**
      	 * Post Type: Jobs.
      	 */

      	$labels = [
      		"name" => __( "Jobs", "midmohires" ),
      		"singular_name" => __( "Job", "midmohires" ),
      		"menu_name" => __( "My Jobs", "midmohires" ),
      		"all_items" => __( "All jobs", "midmohires" ),
      		"add_new" => __( "Add new", "midmohires" ),
      		"add_new_item" => __( "Add new job", "midmohires" ),
      		"edit_item" => __( "Edit Jobs", "midmohires" ),
      		"new_item" => __( "New job", "midmohires" ),
      		"view_item" => __( "View job", "midmohires" ),
      		"view_items" => __( "View jobs", "midmohires" ),
      		"search_items" => __( "Search jobs", "midmohires" ),
      		"not_found" => __( "No jobs found", "midmohires" ),
      		"not_found_in_trash" => __( "No jobs found in trash", "midmohires" ),
      		"parent" => __( "Parent job:", "midmohires" ),
      		"featured_image" => __( "Featured image for this job", "midmohires" ),
      		"set_featured_image" => __( "Set featured image for this job", "midmohires" ),
      		"remove_featured_image" => __( "Remove featured image for this job", "midmohires" ),
      		"use_featured_image" => __( "Use as featured image for this job", "midmohires" ),
      		"archives" => __( "Jobs", "midmohires" ),
      		"insert_into_item" => __( "Insert into job", "midmohires" ),
      		"uploaded_to_this_item" => __( "Upload to this job", "midmohires" ),
      		"filter_items_list" => __( "Filter jobs list", "midmohires" ),
      		"items_list_navigation" => __( "jobs list navigation", "midmohires" ),
      		"items_list" => __( "jobs list", "midmohires" ),
      		"attributes" => __( "jobs attributes", "midmohires" ),
      		"name_admin_bar" => __( "job", "midmohires" ),
      		"item_published" => __( "job published", "midmohires" ),
      		"item_published_privately" => __( "job published privately.", "midmohires" ),
      		"item_reverted_to_draft" => __( "job reverted to draft.", "midmohires" ),
      		"item_scheduled" => __( "job scheduled", "midmohires" ),
      		"item_updated" => __( "job updated.", "midmohires" ),
      		"parent_item_colon" => __( "Parent job:", "midmohires" ),
      	];

      	$args = [
      		"label" => __( "Jobs", "midmohires" ),
      		"labels" => $labels,
      		"description" => "This post type is intended to give space for display of the taxonomies: job as well as company",
      		"public" => true,
      		"publicly_queryable" => true,
      		"show_ui" => true,
      		"show_in_rest" => true,
      		"rest_base" => "",
      		"rest_controller_class" => "WP_REST_Posts_Controller",
      		"has_archive" => true,
      		"show_in_menu" => true,
      		"show_in_nav_menus" => true,
      		"delete_with_user" => false,
      		"exclude_from_search" => false,
      		"capability_type" => "post",
      		"map_meta_cap" => true,
      		"hierarchical" => false,
      		"rewrite" => [ "slug" => "jobs", "with_front" => true ],
      		"query_var" => true,
      		"menu_icon" => "dashicons-nametag",
      		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
      	];

      	register_post_type( "job", $args );

    }

  }

  MidMo_CPT::init();
