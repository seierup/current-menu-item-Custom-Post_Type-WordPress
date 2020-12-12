<?php

	add_filter( 'nav_menu_css_class', 'sco_add_current_menu_item_to_cpt_single_post', 10, 2 );
	function sco_add_current_menu_item_to_cpt_single_post($classes = array(), $menu_item = false){

		global $wp_query;

		$body_classes = get_body_class();
		$postargs = array(
			'public'   => true,
			'_builtin' => false
		);
		$post_types = get_post_types( $postargs, 'names', 'and' ); 
		$post_type_name = get_post_type();
		
	    if ( in_array('menu-item-object-' . $post_type_name, $classes) && is_singular($post_types) ) {
	        $classes[] = 'current-menu-item';
	    }

	    return $classes;
	    
	}
