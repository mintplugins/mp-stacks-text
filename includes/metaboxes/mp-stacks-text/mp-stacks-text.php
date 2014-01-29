<?php
/**
 * Add to the Array which stores all info about the new metabox
 *
 */
function mp_stacks_text_additional_items_array($items_array) {
	
	//Create slice of array using the first item
	$first_line_of_text = array_slice($items_array, 0, 1, true);
	
	$return_items_array = $first_line_of_text;
	
	//Add new items to array after first item
    array_push($return_items_array,
       array(
			'field_id'	 => 'brick_line_1_color',
			'field_title' => __( 'Line 1 Color (Optional)', 'mp_stacks'),
			'field_description' => 'Select the color of line 1.',
			'field_type' => 'colorpicker',
			'field_value' => ''
		),
		array(
			'field_id'	 => 'brick_line_1_font_size',
			'field_title' => __( 'Line 1 Font Size (Optional)', 'mp_stacks'),
			'field_description' => 'Enter the size (in pixels).',
			'field_type' => 'number',
			'field_value' => ''
		)
	);
		
	//Create slice of array using the second item
	$second_line_of_text = array_slice($items_array, 1, 2, true);
		
	//Add second item from original array back to array
	array_push($return_items_array, $second_line_of_text[1]);
	
	//Add new items to array after second original item
	array_push($return_items_array, 
		array(
			'field_id'	 => 'brick_line_2_color',
			'field_title' => __( 'Text Color (Optional)', 'mp_stacks'),
			'field_description' => 'Select the color the text of this stack.',
			'field_type' => 'colorpicker',
			'field_value' => ''
		),
		array(
			'field_id'	 => 'brick_line_2_font_size',
			'field_title' => __( 'Text Font Size (Optional)', 'mp_stacks'),
			'field_description' => 'Enter the size for the title (in pixels).',
			'field_type' => 'number',
			'field_value' => ''
		)
	);
    return $return_items_array;
}
//add_filter('mp_stacks_text_items_array','mp_stacks_text_additional_items_array');