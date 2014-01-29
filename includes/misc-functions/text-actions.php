<?php 

/**
 * Filter Media Output for title
 */
function mp_stacks_text_line1_style($css_output, $post_id){
	
	//Title Color
	$brick_line_1_color = get_post_meta($post_id, 'brick_line_1_color', true);
	
	//Title Font Size
	$brick_line_1_font_size = get_post_meta($post_id, 'brick_line_1_font_size', true);
	
	//Title Full Style
	$brick_line_1_style = !empty($brick_line_1_color) ? 'color: ' . $brick_line_1_color . '; '  : NULL;
	$brick_line_1_style .= !empty($brick_line_1_font_size) ? 'font-size:' . $brick_line_1_font_size . 'px; ' : NULL;
	
	//Full sized css
	$brick_line_1_style = !empty($brick_line_1_style) ? '#mp-brick-' . $post_id . ' .mp-brick-text-line-1, #mp-brick-' . $post_id . ' .mp-brick-text-line-1 a {' . $brick_line_1_style .'}' : NULL;
	
	//Tablet sized css
	$brick_line_1_font_size = !empty($brick_line_1_font_size) ? '@media screen and (max-width: 980px){#mp-brick-' . $post_id . ' .mp-brick-text-line-1 { font-size: ' . ($brick_line_1_font_size*.70) . 'px; }}' : NULL;
	
	//Add new CSS to existing CSS passed-in
	$css_output .= $brick_line_1_style . $brick_line_1_font_size;
	
	//Return new CSS
	return $css_output;

}
//add_filter('mp_brick_additional_css', 'mp_stacks_text_line1_style', 10, 2);


/**
 * Filter Media Output for text
 */
function mp_stacks_text_line2_style($css_output, $post_id){
	
	//Text Color
	$brick_line_2_color = get_post_meta($post_id, 'brick_line_2_color', true);
	
	//Text Font Size
	$brick_line_2_font_size = get_post_meta($post_id, 'brick_line_2_font_size', true);
	
	//Text Style
	$brick_line_2_style = !empty($brick_line_2_color) ? 'color: ' . $brick_line_2_color . '; '  : NULL;
	$brick_line_2_style .= !empty($brick_line_2_font_size) ? 'font-size:' . $brick_line_2_font_size . 'px; ' : NULL;
	
	//Full sized css
	$brick_line_2_style = !empty($brick_line_2_style) ? '#mp-brick-' . $post_id . ' .mp-brick-text-line-2, #mp-brick-' . $post_id . ' .mp-brick-text-line-2 a{' . $brick_line_2_style .'}' : NULL;
		
	//Tablet sized css
	$brick_line_2_font_size = !empty($brick_line_2_font_size) ? '@media screen and (max-width: 980px){#mp-brick-' . $post_id . ' .mp-brick-text-line-2 { font-size: ' . ($brick_line_2_font_size*.70) . 'px; }}' : NULL;
	
	//Add new CSS to existing CSS passed-in
	$css_output .= $brick_line_2_style . $brick_line_2_font_size;
	
	//Return new CSS
	return $css_output;
		
}
//add_filter('mp_brick_additional_css', 'mp_stacks_text_line2_style', 10, 2);