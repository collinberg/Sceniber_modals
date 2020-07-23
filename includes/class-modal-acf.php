<?php
/**
 * Advanced Custom Fields for Modal Post Type
 *
 * @package   Modal_Post_Type
 * @license   GPL-2.0+
 */



 acf_add_local_field_group(array(
 	'key' => 'group_5f05ea7895497',
 	'title' => 'Modal Layouts',
 	'fields' => array(
 		array(
 			'key' => 'field_5f05ea7ddd3ef',
 			'label' => '',
 			'name' => 'modal_layouts',
 			'type' => 'radio',
 			'instructions' => 'Select the Layout for your modal.',
 			'wrapper' => array(
 				'class' => 'acf-image-select',
 			),
 			'choices' => array(
 				'left' => '<img src="/wp-content/plugins/sceniber_modals/assets/img/LeftAlign.png"><p>Left Image</p>',
 				'right' => '<img src="/wp-content/plugins/sceniber_modals/assets/img/RightAlign.png"><p>Right Image</p>',
 				'center' => '<img src="/wp-content/plugins/sceniber_modals/assets/img/CenterAlign.png"><p>Centered</p>',
 				'top' => '<img src="/wp-content/plugins/sceniber_modals/assets/img/TopAlign.png"><p>Top Image</p>',
 			),
 			'return_format' => 'value',
 			'save_other_choice' => 0,
 		),
 	),
 	'location' => array(
 		array(
 			array(
 				'param' => 'post_type',
 				'operator' => '==',
 				'value' => 'sceniber-modals',
 			),
 		),
 	),
 ));
