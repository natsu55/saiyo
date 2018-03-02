<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package tactical
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function tactical_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'tactical_body_classes' );

function base_pagination() {
    global $wp_query, $wp_rewrite;

    $big = 999999999; // This needs to be an unlikely integer
    // For more options and info view the docs for paginate_links()
    // http://codex.wordpress.org/Function_Reference/paginate_links

    // URL base depends on permalink settings.

    $paginate_links = paginate_links( array(
        'base' => str_replace( $big, '%#%', html_entity_decode( get_pagenum_link($big) )),
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'mid_size' => 5,
        'prev_text'          => __('<span class="arrow"></span> Prev','cur_med'),
		'next_text'          => __('Next <span class="arrow"></span>','cur_med'),
		'add_args' => false
    ) );

    // Display the pagination if more than one page is found
    if ( $paginate_links ) {
        // echo '<div class="pagination-container"><div class="pagination">';
        // if($paged != 1) echo '<a href="' . get_pagenum_link() . '" class="page-numbers first-page"><span class="arrow"></span> 最初</a>';
        echo '<div class="pagination-container">';
        echo $paginate_links;
        echo '</div>';
        // if($paged != $wp_query->max_num_pages) echo '<a href="' . get_pagenum_link($wp_query->max_num_pages) . '" class="page-numbers last-page">最後 <span class="arrow"></span></a>';
        // echo '</div></div><!--// end .pagination -->';
    }
}



function custom_excerpt($content,$size = null,$end = null){
	$excerpt = $content;
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);

	if($size == null) $size = 250;

	if(mb_strlen($excerpt) >= $size){
		$excerpt = mb_substr($excerpt, 0, $size);
		if($end != null){
			$excerpt .= $end;
		}
		else{
			$excerpt .= '... ';
		}

	}

	return $excerpt;
}



add_action( 'init', 'cpt_article' );
function cpt_article() {

	$partner_labels = array(
		'name' => __( 'Articles', ThemeDomain ),
		'singular_name' => __( 'Articles', ThemeDomain ),
		'add_new' => __( 'Add new', ThemeDomain ),
		'all_items' => __( 'All Articles', ThemeDomain ),
		'add_new_item' => __( 'Add new Articles', ThemeDomain ),
		'new_item' => __( 'New Articles', ThemeDomain ),
		'view_item' => __( 'View Articles', ThemeDomain ),
		'search_items' => __( 'Search Articles', ThemeDomain ),
		'not_found' => __( 'No Articles found', ThemeDomain ),
		'not_found_in_trash' => __( 'No Articles found in trash', ThemeDomain ),
		'parent_item_colon' => __( 'Parent Articles', ThemeDomain ),
	);

	$partner_supports = array(
		'title',
		'revisions',
		'thumbnail',
		'editor'
	);

	$partner_taxonomies = array(
		'article_c',
	);

	$partner_args = array(
		'labels' => $partner_labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => $partner_supports,
		'taxonomies' => $partner_taxonomies,
		'menu_icon' => 'dashicons-format-aside',
	);

	 register_post_type( 'article', $partner_args );

	$partner_group_labels = array(
		'name' => __( 'Category', ThemeDomain ),
		'singular_name' => __( 'Category', ThemeDomain ),
		'menu_name' => __( 'Category', ThemeDomain ),
		'all_items' => __( 'All Category', ThemeDomain ),
		'edit_item' => __( 'Edit Category', ThemeDomain ),
		'view_item' => __( 'View Category', ThemeDomain ),
		'update_item' => __( 'Update Category', ThemeDomain ),
		'add_new_item' => __( 'Add New Category', ThemeDomain ),
		'new_item_name' => __( 'New Category Name', ThemeDomain ),
		'parent_item' => __( 'Parent Category', ThemeDomain ),
		'parent_item_colon' => __( 'Parent Category:' , ThemeDomain ),
		'search_items' => __( 'Search Category', ThemeDomain ),
		'popular_items' => __( 'Popular Category', ThemeDomain ),
		'add_or_remove_items' => __( 'Add or remove groups', ThemeDomain ),
	);

	$partner_group_args = array(
		'hierarchical' => true,
		'labels' => $partner_group_labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array(
			'slug' => 'article-cat'
		)
	);

	register_taxonomy(
		'article_c',
		'article',
		$partner_group_args
	);
}



add_action( 'init', 'cpt_faq' );
function cpt_faq() {

	$partner_labels = array(
		'name' => __( 'FAQ', ThemeDomain ),
		'singular_name' => __( 'FAQ', ThemeDomain ),
		'add_new' => __( 'Add new', ThemeDomain ),
		'all_items' => __( 'All FAQ', ThemeDomain ),
		'add_new_item' => __( 'Add new FAQ', ThemeDomain ),
		'new_item' => __( 'New FAQ', ThemeDomain ),
		'view_item' => __( 'View FAQ', ThemeDomain ),
		'search_items' => __( 'Search FAQ', ThemeDomain ),
		'not_found' => __( 'No FAQ found', ThemeDomain ),
		'not_found_in_trash' => __( 'No FAQ found in trash', ThemeDomain ),
		'parent_item_colon' => __( 'Parent FAQ', ThemeDomain ),
	);

	$partner_supports = array(
		'title',
		//'revisions',
		//'thumbnail',
		//'editor'
	);

	$partner_taxonomies = array(
		'faq_c',
	);

	$partner_args = array(
		'labels' => $partner_labels,
		'public' => true,
		'has_archive' => false,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => $partner_supports,
		//'taxonomies' => $partner_taxonomies,
		'menu_icon' => 'dashicons-star-half',
	);

	 register_post_type( 'faq', $partner_args );
	$partner_group_args = array(
		'hierarchical' => true,
		'labels' => $partner_group_labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array(
			'slug' => 'faq-cat'
		)
	);

	register_taxonomy(
		'article',
		$partner_group_args
	);
}

add_action( 'init', 'cpt_faq_dash' );
function cpt_faq_dash() {

	$partner_labels = array(
		'name' => __( 'Dash - FAQ', ThemeDomain ),
		'singular_name' => __( 'Dash - FAQ', ThemeDomain ),
		'add_new' => __( 'Add new', ThemeDomain ),
		'all_items' => __( 'All Dash - FAQ', ThemeDomain ),
		'add_new_item' => __( 'Add new Dash - FAQ', ThemeDomain ),
		'new_item' => __( 'New Dash - FAQ', ThemeDomain ),
		'view_item' => __( 'View Dash - FAQ', ThemeDomain ),
		'search_items' => __( 'Search Dash - FAQ', ThemeDomain ),
		'not_found' => __( 'No Dash - FAQ found', ThemeDomain ),
		'not_found_in_trash' => __( 'No Dash - FAQ found in trash', ThemeDomain ),
		'parent_item_colon' => __( 'Parent Dash - FAQ', ThemeDomain ),
	);

	$partner_supports = array(
		'title',
		'revisions',
		//'thumbnail',
		'editor'
	);

	$partner_taxonomies = array(
		'faq_c_dash',
	);

	$partner_args = array(
		'labels' => $partner_labels,
		'public' => true,
		'has_archive' => false,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => $partner_supports,
		'taxonomies' => $partner_taxonomies,
		'menu_icon' => 'dashicons-format-status',
	);

	 register_post_type( 'faq-dash', $partner_args );
	$partner_group_args = array(
		'hierarchical' => true,
		'labels' => $partner_group_labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array(
			'slug' => 'faq-cat-dash'
		)
	);

	$partner_group_labels = array(
		'name' => __( 'FAQ Category', ThemeDomain ),
		'singular_name' => __( 'FAQ Category', ThemeDomain ),
		'menu_name' => __( 'FAQ Category', ThemeDomain ),
		'all_items' => __( 'All FAQ Category', ThemeDomain ),
		'edit_item' => __( 'Edit FAQ Category', ThemeDomain ),
		'view_item' => __( 'View FAQ Category', ThemeDomain ),
		'update_item' => __( 'Update FAQ Category', ThemeDomain ),
		'add_new_item' => __( 'Add New FAQ Category', ThemeDomain ),
		'new_item_name' => __( 'New FAQ Category Name', ThemeDomain ),
		'parent_item' => __( 'Parent FAQ Category', ThemeDomain ),
		'parent_item_colon' => __( 'Parent FAQ Category:' , ThemeDomain ),
		'search_items' => __( 'Search FAQ Category', ThemeDomain ),
		'popular_items' => __( 'Popular FAQ Category', ThemeDomain ),
		'add_or_remove_items' => __( 'Add or remove groups', ThemeDomain ),
	);

	register_taxonomy(
		'faq_c_dash',
		'faq-dash',
		$partner_group_args
	);
}

add_action( 'init', 'cpt_review' );
function cpt_review() {

	$partner_labels = array(
		'name' => __( 'Reviews', ThemeDomain ),
		'singular_name' => __( 'Reviews', ThemeDomain ),
		'add_new' => __( 'Add new', ThemeDomain ),
		'all_items' => __( 'All Reviews', ThemeDomain ),
		'add_new_item' => __( 'Add new Reviews', ThemeDomain ),
		'new_item' => __( 'New Reviews', ThemeDomain ),
		'view_item' => __( 'View Reviews', ThemeDomain ),
		'search_items' => __( 'Search Reviews', ThemeDomain ),
		'not_found' => __( 'No Reviews found', ThemeDomain ),
		'not_found_in_trash' => __( 'No Reviews found in trash', ThemeDomain ),
		'parent_item_colon' => __( 'Parent Reviews', ThemeDomain ),
	);

	$partner_supports = array(
		'title',
		//'revisions',
		'thumbnail',
		//'editor'
	);

	$partner_taxonomies = array(
		'review_c',
	);

	$partner_args = array(
		'labels' => $partner_labels,
		'public' => true,
		'has_archive' => false,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => $partner_supports,
		//'taxonomies' => $partner_taxonomies,
		'menu_icon' => 'dashicons-megaphone',
	);

	register_post_type( 'review', $partner_args );
	$partner_group_args = array(
		'hierarchical' => true,
		'labels' => $partner_group_labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array(
			'slug' => 'review-cat'
		)
	);

	register_taxonomy(
		'article',
		$partner_group_args
	);
}


add_action( 'init', 'cpt_growth' );
function cpt_growth() {

	$partner_labels = array(
		'name' => __( 'Growth Library', ThemeDomain ),
		'singular_name' => __( 'Growth Library', ThemeDomain ),
		'add_new' => __( 'Add new', ThemeDomain ),
		'all_items' => __( 'All Growth Library', ThemeDomain ),
		'add_new_item' => __( 'Add new Growth Library', ThemeDomain ),
		'new_item' => __( 'New Growth Library', ThemeDomain ),
		'view_item' => __( 'View Growth Library', ThemeDomain ),
		'search_items' => __( 'Search Growth Library', ThemeDomain ),
		'not_found' => __( 'No Growth Library found', ThemeDomain ),
		'not_found_in_trash' => __( 'No Growth Library found in trash', ThemeDomain ),
		'parent_item_colon' => __( 'Parent Growth Library', ThemeDomain ),
	);

	$partner_supports = array(
		'title',
		//'revisions',
		'thumbnail',
		'editor'
	);

	$partner_taxonomies = array(
		'growth_c',
	);

	$partner_args = array(
		'labels' => $partner_labels,
		'public' => true,
		'has_archive' => false,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => $partner_supports,
		//'taxonomies' => $partner_taxonomies,
		'menu_icon' => 'dashicons-megaphone',
	);

	register_post_type( 'growth', $partner_args );
	$partner_group_args = array(
		'hierarchical' => true,
		'labels' => $partner_group_labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array(
			'slug' => 'growth-cat'
		)
	);

	register_taxonomy(
		'article',
		$partner_group_args
	);
}

function theme_option($id){
	return of_get_option(''.$id);
}


/**
 * Like get_template_part() put lets you pass args to the template file
 * Args are available in the tempalte as $template_args array
 * @param string filepart
 * @param mixed wp_args style argument list
 */
function hm_get_template_part( $file, $template_args = array(), $cache_args = array() ) {
    $template_args = wp_parse_args( $template_args );
    $cache_args = wp_parse_args( $cache_args );
    if ( $cache_args ) {
        foreach ( $template_args as $key => $value ) {
            if ( is_scalar( $value ) || is_array( $value ) ) {
                $cache_args[$key] = $value;
            } else if ( is_object( $value ) && method_exists( $value, 'get_id' ) ) {
                $cache_args[$key] = call_user_method( 'get_id', $value );
            }
        }
        if ( ( $cache = wp_cache_get( $file, serialize( $cache_args ) ) ) !== false ) {
            if ( ! empty( $template_args['return'] ) )
                return $cache;
            echo $cache;
            return;
        }
    }
    $file_handle = $file;
    do_action( 'start_operation', 'hm_template_part::' . $file_handle );
    if ( file_exists( get_stylesheet_directory() . '/' . $file . '.php' ) )
        $file = get_stylesheet_directory() . '/' . $file . '.php';
    elseif ( file_exists( get_template_directory() . '/' . $file . '.php' ) )
        $file = get_template_directory() . '/' . $file . '.php';
    ob_start();
    $return = require( $file );
    $data = ob_get_clean();
    do_action( 'end_operation', 'hm_template_part::' . $file_handle );
    if ( $cache_args ) {
        wp_cache_set( $file, $data, serialize( $cache_args ), 3600 );
    }
    if ( ! empty( $template_args['return'] ) )
        if ( $return === false )
            return false;
        else
            return $data;
    echo $data;
}