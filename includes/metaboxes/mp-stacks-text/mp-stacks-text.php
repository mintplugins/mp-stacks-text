<?php
/**
 * Add to the Array which stores all info about the new metabox
 *
 */
function mp_stacks_text_additional_items_array($items_array) {
    array_push($items_array,
       array(
			'field_id'	 => 'stack_title_color',
			'field_title' => __( 'Title Color (Optional)', 'mp_stacks'),
			'field_description' => 'Select the color the title of this stack.',
			'field_type' => 'colorpicker',
			'field_value' => ''
		),
		array(
			'field_id'	 => 'stack_title_font_size',
			'field_title' => __( 'Title Font Size (Optional)', 'mp_stacks'),
			'field_description' => 'Enter the size for the title (in pixels).',
			'field_type' => 'number',
			'field_value' => ''
		),
		array(
			'field_id'	 => 'stack_title_font_css',
			'field_title' => __( 'Title Font CSS (Optional)', 'mp_stacks'),
			'field_description' => 'Enter some styles for the title.',
			'field_type' => 'textarea',
			'field_value' => ''
		),
		array(
			'field_id'	 => 'stack_text_color',
			'field_title' => __( 'Text Color (Optional)', 'mp_stacks'),
			'field_description' => 'Select the color the text of this stack.',
			'field_type' => 'colorpicker',
			'field_value' => ''
		),
		array(
			'field_id'	 => 'stack_text_font_size',
			'field_title' => __( 'Text Font Size (Optional)', 'mp_stacks'),
			'field_description' => 'Enter the size for the title (in pixels).',
			'field_type' => 'number',
			'field_value' => ''
		),
		array(
			'field_id'	 => 'stack_text_font_css',
			'field_title' => __( 'Text Font CSS (Optional)', 'mp_stacks'),
			'field_description' => 'Enter some styles for the text.',
			'field_type' => 'textarea',
			'field_value' => ''
		)
	);
    return $items_array;
}
add_filter('mp_stacks_text_items_array','mp_stacks_text_additional_items_array');