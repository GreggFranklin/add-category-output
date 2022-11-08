<?php

/**
 * Add category output(Category pages) for Programs
 *
 * Resolves getting a 404 error for Category pages
 */
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'programs'); // don't forget nav_menu_item to allow menus to work!
    $query->set('post_type',$post_type);
    return $query;
    }
}
add_filter('pre_get_posts', 'query_post_type');
