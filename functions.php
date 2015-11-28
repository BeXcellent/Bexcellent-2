<?php
add_theme_support('post-thumbnails');
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

register_nav_menu( 'primary', 'Primary Menu' );
function new_nav_menu_items($items, $args) {
	if( $args->theme_location == 'primary' ){
		$search = get_search_form(false);
		$bubbleBtn = '';
		$items = $items.$search.$bubbleBtn;
	}
	return $items;
}
add_filter( 'wp_nav_menu_items', 'new_nav_menu_items', 10, 2 );


add_filter( 'request', 'my_request_filter' );
function my_request_filter( $query_vars ) {
    if( isset( $_GET['s'] ) && empty( $_GET['s'] ) ) {
        $query_vars['s'] = " ";
    }
    return $query_vars;
}
?>