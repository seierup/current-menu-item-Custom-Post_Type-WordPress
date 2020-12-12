<?php

	add_filter( 'nav_menu_css_class', 'sco_add_current_menu_item_to_cpt_single_post', 10, 2 );
	function sco_add_current_menu_item_to_cpt_single_post($classes = array(), $menu_item = false){

		global $wp_query;
		$post_type_name = get_post_type();

	    if ( in_array('menu-item-object-' . $post_type_name, $classes) && is_singular($post_type_name) ) {
	        $classes[] = 'current-menu-item';
	    }

	    return $classes;
	}
