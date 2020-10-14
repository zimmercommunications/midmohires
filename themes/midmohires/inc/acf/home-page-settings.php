<?php
if( function_exists('acf_add_local_field_group') ):

//Add Homepage Settings Custom Fields
  acf_add_local_field_group(array(
  	'key' => 'group_5f86224cc67e4',
  	'title' => 'Home Page Settings',
  	'fields' => array(
  	),
  	'location' => array(
  		array(
  			array(
  				'param' => 'post_template',
  				'operator' => '==',
  				'value' => 'template-home.php',
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
