<?php

if( function_exists('acf_add_local_field_group') ):

    //Add Job Category Settings
    acf_add_local_field_group(array(
    	'key' => 'group_5f88543265ec3',
    	'title' => 'Job Category Settings',
    	'fields' => array(
    		array(
    			'key' => 'field_5f88548c0af59',
    			'label' => 'Icon',
    			'name' => 'icon',
    			'type' => 'text',
    			'instructions' => 'Use the material icon tag. Library found <a target="_blank" href="https://cdn.materialdesignicons.com/2.8.94/">here</a>',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array(
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'default_value' => '',
    			'placeholder' => 'mdi-<icon_tag>',
    			'prepend' => '',
    			'append' => '',
    			'maxlength' => '',
    		),
    	),
    	'location' => array(
    		array(
    			array(
    				'param' => 'taxonomy',
    				'operator' => '==',
    				'value' => 'job_category',
    			),
    		),
    	),
    	'menu_order' => 0,
    	'position' => 'normal',
    	'style' => 'default',
    	'label_placement' => 'top',
    	'instruction_placement' => 'label',
    	'hide_on_screen' => '',
    	'active' => true,
    	'description' => '',
    ));

endif;
