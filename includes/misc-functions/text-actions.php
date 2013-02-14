<?php 

/**
 * Filter Media Output for title
 */
function mp_stacks_text_title_style($post_id){
	
	//Title Color
	$stack_title_color = get_post_meta($post_id, 'stack_title_color', true);
	
	//Title Font Size
	$stack_title_font_size = get_post_meta($post_id, 'stack_title_font_size', true);
	
	//Title Font CSS
	$stack_title_font_css = get_post_meta($post_id, 'stack_title_font_css', true);
	
	//Title Full Style
	$stack_title_style = !empty($stack_title_color) ? 'color: ' . $stack_title_color . '; '  : NULL;
	$stack_title_style .= isset($stack_title_font_css) ? $stack_title_font_css  : NULL;
	$stack_title_style .= isset($stack_title_font_size) ? 'font-size:' . $stack_title_font_size . 'px; ' : NULL;
	
	//Full sized css
	echo !empty($stack_title_style) ? '<style>#stack-' . $post_id . ' .mp_title {' . $stack_title_style .'} </style>' : NULL;
	
	//Tablet sized css
	echo !empty($stack_title_font_size) ? '<style>@media screen and (max-width: 980px){#stack-' . $post_id . ' .mp_title { font-size: ' . ($stack_title_font_size*.70) . 'px; } </style>' : NULL;
	
	//Mobile sized css
	echo !empty($stack_title_font_size) ? '<style>@media screen and (max-width: 320px){#stack-' . $post_id . ' .mp_title { font-size: ' . ($stack_title_font_size*.40) . 'px; } </style>' : NULL;

}
add_action('mp_stacks_text_action', 'mp_stacks_text_title_style', 10, 1);


/**
 * Filter Media Output for text
 */
function mp_stacks_text_text_style($post_id){
	
	//Text Color
	$stack_text_color = get_post_meta($post_id, 'stack_text_color', true);
	
	//Text Font CSS
	$stack_text_font_css = get_post_meta($post_id, 'stack_text_font_css', true);
	
	//Text Font Size
	$stack_text_font_size = get_post_meta($post_id, 'stack_text_font_size', true);
	
	//Text Style
	$stack_text_style = !empty($stack_text_color) ? 'color: ' . $stack_text_color . '; '  : NULL;
	$stack_text_style .= isset($stack_text_font_css) ? $stack_text_font_css  : NULL;
	$stack_text_style .= isset($stack_text_font_size) ? 'font-size:' . $stack_text_font_size . 'px; ' : NULL;
	
	//Full sized css
	echo !empty($stack_text_style) ? '<style>#stack-' . $post_id . ' .mp_text {' . $stack_text_style .'} </style>' : NULL;
		
	//Tablet sized css
	echo !empty($stack_text_font_size) ? '<style>@media screen and (max-width: 980px){#stack-' . $post_id . ' .mp_text { font-size: ' . ($stack_text_font_size*.70) . 'px; } </style>' : NULL;
	
	//Mobile sized css
	echo !empty($stack_text_font_size) ? '<style>@media screen and (max-width: 320px){#stack-' . $post_id . ' .mp_text { font-size: ' . ($stack_text_font_size*.40) . 'px; } </style>' : NULL;
	
}
add_action('mp_stacks_text_action', 'mp_stacks_text_text_style', 10, 1);