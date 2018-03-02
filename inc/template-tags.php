<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package tactical
 */

if ( ! function_exists( 'tactical_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function tactical_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated visuallyhidden" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( 'Posted on %s', 'post date', ThemeDomain ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', ThemeDomain ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

}
endif;


if ( ! function_exists( 'tactical_posted_list' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function tactical_posted_list() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( '%s', 'post date', ThemeDomain ),
		  $time_string
	);


	echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'tactical_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function tactical_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', ThemeDomain ) );
		if ( $categories_list && tactical_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', ThemeDomain ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', ThemeDomain ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', ThemeDomain ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		/* translators: %s: post title */
		comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', ThemeDomain ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', ThemeDomain ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

if ( ! function_exists( 'tactical_single_post' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function tactical_single_post($post_type = 'post') {
		//$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

		$query = new WP_Query( array(
		    'post_type' => $post_type,
		    'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => 1,
		    //'paged' => $paged,
		) );

		//$wp_query->max_num_pages = $query->max_num_pages;

		if($query->have_posts()){
			while ( $query->have_posts() ) {
				$query->the_post();

				get_template_part( 'template-parts/list', 'single' );
			}

			//base_pagination();
		}
		else{
			get_template_part( 'template-parts/content', 'none' );
		}

		wp_reset_postdata();

}

endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function tactical_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'tactical_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'tactical_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so tactical_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so tactical_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in tactical_categorized_blog.
 */
function tactical_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'tactical_categories' );
}
add_action( 'edit_category', 'tactical_category_transient_flusher' );
add_action( 'save_post',     'tactical_category_transient_flusher' );

do_action("tacticaltrader_show_user_subscriptions");


function show_active_subscriptions($subscriptions) {
  //parse subscription array
  foreach( $subscriptions as $subscription) {
    echo sprintf("Name: %s (%s) expires on %s",
      $subscription['name'],
      $subscription['description'],
      $subscription['expires_on']
    );
  }
}

add_action("tacticaltrader_show_user_subscriptions", "show_active_subscriptions");



add_filter('show_admin_bar', '__return_false');
