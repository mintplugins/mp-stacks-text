<?php 

/**
 * Filter Media Output for title
 */
function mp_stacks_text_title_style($stack_title_style, $post_id){
	
	//Title Color
	$stack_title_color = get_post_meta($post_id, 'stack_title_color', true);
	
	//Title Font CSS
	$stack_title_font_css = get_post_meta($post_id, 'stack_title_font_css', true);
	
	//Title Style
	$stack_title_style .= !empty($stack_title_color) ? 'color: ' . $stack_title_color . '; '  : NULL;
	$stack_title_style .= isset($stack_title_font_css) ? $stack_title_font_css  : NULL;
	
	//Return
	return $stack_title_style;
}
add_filter('mp_stacks_title_style', 'mp_stacks_text_title_style', 10, 2);


/**
 * Filter Media Output for text
 */
function mp_stacks_text_text_style($stack_text_style, $post_id){
	
	//Title Color
	$stack_text_color = get_post_meta($post_id, 'stack_text_color', true);
	
	//Title Font CSS
	$stack_text_font_css = get_post_meta($post_id, 'stack_text_font_css', true);
	
	//Title Style
	$stack_text_style .= !empty($stack_text_color) ? 'color: ' . $stack_text_color . '; '  : NULL;
	$stack_text_style .= isset($stack_text_font_css) ? $stack_text_font_css  : NULL;
	
	//Return
	return $stack_text_style;
}
add_filter('mp_stacks_text_style', 'mp_stacks_text_text_style', 10, 2);