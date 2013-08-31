<?php 

/**
 * Filter Media Output for title
 */
function mp_stacks_text_title_style($post_id){
	
	//Title Color
	$brick_line_1_color = get_post_meta($post_id, 'brick_line_1_color', true);
	
	//Title Font Size
	$brick_line_1_font_size = get_post_meta($post_id, 'brick_line_1_font_size', true);
	
	//Title Font CSS
	$brick_line_1_font_css = get_post_meta($post_id, 'brick_line_1_font_css', true);
	
	//Title Full Style
	$brick_line_1_style = !empty($brick_line_1_color) ? 'color: ' . $brick_line_1_color . '; '  : NULL;
	$brick_line_1_style .= isset($brick_line_1_font_css) ? $brick_line_1_font_css  : NULL;
	$brick_line_1_style .= !empty($brick_line_1_font_size) ? 'font-size:' . $brick_line_1_font_size . 'px; ' : NULL;
	
	//Full sized css
	echo !empty($brick_line_1_style) ? '<style scoped>#mp-brick-' . $post_id . ' .mp-brick-text-line-1, #mp-brick-' . $post_id . ' .mp-brick-text-line-1 a {' . $brick_line_1_style .'} </style>' : NULL;
	
	//Tablet sized css
	echo !empty($brick_line_1_font_size) ? '<style scoped>@media screen and (max-width: 980px){#mp-brick-' . $post_id . ' .mp-brick-text-line-1 { font-size: ' . ($brick_line_1_font_size*.70) . 'px; }} </style>' : NULL;

}
add_action('mp_stacks_text_action', 'mp_stacks_text_title_style', 10, 1);


/**
 * Filter Media Output for text
 */
function mp_stacks_text_text_style($post_id){
	
	//Text Color
	$brick_line_2_color = get_post_meta($post_id, 'brick_line_2_color', true);
	
	//Text Font CSS
	$brick_line_2_font_css = get_post_meta($post_id, 'brick_line_2_font_css', true);
	
	//Text Font Size
	$brick_line_2_font_size = get_post_meta($post_id, 'brick_line_2_font_size', true);
	
	//Text Style
	$brick_line_2_style = !empty($brick_line_2_color) ? 'color: ' . $brick_line_2_color . '; '  : NULL;
	$brick_line_2_style .= isset($brick_line_2_font_css) ? $brick_line_2_font_css  : NULL;
	$brick_line_2_style .= !empty($brick_line_2_font_size) ? 'font-size:' . $brick_line_2_font_size . 'px; ' : NULL;
	
	//Full sized css
	echo !empty($brick_line_2_style) ? '<style scoped>#mp-brick-' . $post_id . ' .mp-brick-text-line-2, #mp-brick-' . $post_id . ' .mp-brick-text-line-2 a{' . $brick_line_2_style .'} </style>' : NULL;
		
	//Tablet sized css
	echo !empty($brick_line_2_font_size) ? '<style scoped>@media screen and (max-width: 980px){#mp-brick-' . $post_id . ' .mp-brick-text-line-2 { font-size: ' . ($brick_line_2_font_size*.70) . 'px; }} </style>' : NULL;
		
}
add_action('mp_stacks_text_action', 'mp_stacks_text_text_style', 10, 1);