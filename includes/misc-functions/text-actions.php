<?php 

/**
 * Filter Media Output for title
 */
function mp_stacks_text_title_style($post_id){
	
	//Title Color
	$brick_title_color = get_post_meta($post_id, 'brick_title_color', true);
	
	//Title Font Size
	$brick_title_font_size = get_post_meta($post_id, 'brick_title_font_size', true);
	
	//Title Font CSS
	$brick_title_font_css = get_post_meta($post_id, 'brick_title_font_css', true);
	
	//Title Full Style
	$brick_title_style = !empty($brick_title_color) ? 'color: ' . $brick_title_color . '; '  : NULL;
	$brick_title_style .= isset($brick_title_font_css) ? $brick_title_font_css  : NULL;
	$brick_title_style .= !empty($brick_title_font_size) ? 'font-size:' . $brick_title_font_size . 'px; ' : NULL;
	
	//Full sized css
	echo !empty($brick_title_style) ? '<style scoped>#brick-' . $post_id . ' .mp_title {' . $brick_title_style .'} </style>' : NULL;
	
	//Tablet sized css
	echo !empty($brick_title_font_size) ? '<style scoped>@media screen and (max-width: 980px){#brick-' . $post_id . ' .mp_title { font-size: ' . ($brick_title_font_size*.70) . 'px; }} </style>' : NULL;
	
	//Mobile sized css
	echo !empty($brick_title_font_size) ? '<style scoped>@media screen and (max-width: 420px){#brick-' . $post_id . ' .mp_title { font-size: ' . ($brick_title_font_size*.30) . 'px; }} </style>' : NULL;

}
add_action('mp_stacks_text_action', 'mp_stacks_text_title_style', 10, 1);


/**
 * Filter Media Output for text
 */
function mp_stacks_text_text_style($post_id){
	
	//Text Color
	$brick_text_color = get_post_meta($post_id, 'brick_text_color', true);
	
	//Text Font CSS
	$brick_text_font_css = get_post_meta($post_id, 'brick_text_font_css', true);
	
	//Text Font Size
	$brick_text_font_size = get_post_meta($post_id, 'brick_text_font_size', true);
	
	//Text Style
	$brick_text_style = !empty($brick_text_color) ? 'color: ' . $brick_text_color . '; '  : NULL;
	$brick_text_style .= isset($brick_text_font_css) ? $brick_text_font_css  : NULL;
	$brick_text_style .= !empty($brick_text_font_size) ? 'font-size:' . $brick_text_font_size . 'px; ' : NULL;
	
	//Full sized css
	echo !empty($brick_text_style) ? '<style scoped>#brick-' . $post_id . ' .mp_text {' . $brick_text_style .'} </style>' : NULL;
		
	//Tablet sized css
	echo !empty($brick_text_font_size) ? '<style scoped>@media screen and (max-width: 980px){#brick-' . $post_id . ' .mp_text { font-size: ' . ($brick_text_font_size*.70) . 'px; }} </style>' : NULL;
	
	//Mobile sized css
	echo !empty($brick_text_font_size) ? '<style scoped>@media screen and (max-width: 420px){#brick-' . $post_id . ' .mp_text { font-size: ' . ($brick_text_font_size*.30) . 'px; }} </style>' : NULL;
	
}
add_action('mp_stacks_text_action', 'mp_stacks_text_text_style', 10, 1);