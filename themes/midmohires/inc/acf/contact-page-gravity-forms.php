<?php
acf_add_local_field_group(array(
	'key' => 'group_5f92e937e09f2',
	'title' => 'Contact Page - Gravity Form',
	'fields' => array(
		array(
			'key' => 'field_5f92e9462c411',
			'label' => 'Gravity Form',
			'name' => 'gravity_form_id',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-contact.php',
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
