<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */

function optionsframework_option_name() {
	// This gets the theme name from the stylesheet
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );


}


/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace ThemeDomain
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', ThemeDomain ),
		'two' => __( 'Two', ThemeDomain ),
		'three' => __( 'Three', ThemeDomain ),
		'four' => __( 'Four', ThemeDomain ),
		'five' => __( 'Five', ThemeDomain )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', ThemeDomain ),
		'two' => __( 'Pancake', ThemeDomain ),
		'three' => __( 'Omelette', ThemeDomain ),
		'four' => __( 'Crepe', ThemeDomain ),
		'five' => __( 'Waffle', ThemeDomain )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/img/';

	$options = array();

	$options[] = array(
		'name' => __( 'Footer Settings', ThemeDomain ),
		'type' => 'heading'
	);

	// $options[] = array(
	// 	'name' => __( 'Input Text Mini', ThemeDomain ),
	// 	'desc' => __( 'A mini text input field.', ThemeDomain ),
	// 	'id' => 'example_text_mini',
	// 	'std' => 'Default',
	// 	'class' => 'mini',
	// 	'type' => 'text'
	// );

	$options[] = array(
		'name' => __( 'Copyright', ThemeDomain ),
		'desc' => __( 'description here', ThemeDomain ),
		'id' => 'copyright_text',
		'std' => '© Copyright Daido Life Insurance Campany All Rights Reserved.',
		'type' => 'text'
	);

	// $options[] = array(
	// 	'name' => __( 'Twitter Handle Link', ThemeDomain ),
	// 	'desc' => __( '.', ThemeDomain ),
	// 	'id' => 'twitter_handle-link',
	// 	'std' => 'handle',
	// 	'type' => 'text'
	// );


	//$options[] = array(
	//	'name' => __( 'tumblr Link', ThemeDomain ),
	//	'desc' => __( '.', ThemeDomain ),
	//	'id' => 'tumblr-link',
	//	'std' => '#tumblr',
	//	'type' => 'text'
	//);


	//$options[] = array(
	//	'name' => __( 'Facebook Link', ThemeDomain ),
	//	'desc' => __( '.', ThemeDomain ),
	//	'id' => 'facebook-link',
	//	'std' => '#fb',
	//	'type' => 'text'
	//);


	// $options[] = array(
	// 	'name' => __( 'Input with Placeholder', ThemeDomain ),
	// 	'desc' => __( 'A text input field with an HTML5 placeholder.', ThemeDomain ),
	// 	'id' => 'example_placeholder',
	// 	'placeholder' => 'Placeholder',
	// 	'type' => 'text'
	// );

	//$options[] = array(
	//	'name' => __( 'Textarea', ThemeDomain ),
	//	'desc' => __( 'Textarea description.', ThemeDomain ),
	//	'id' => 'example_textarea',
	//	'std' => 'Default Text',
	//	'type' => 'textarea'
	//);

	// $options[] = array(
	// 	'name' => __( 'Input Select Small', ThemeDomain ),
	// 	'desc' => __( 'Small Select Box.', ThemeDomain ),
	// 	'id' => 'example_select',
	// 	'std' => 'three',
	// 	'type' => 'select',
	// 	'class' => 'mini', //mini, tiny, small
	// 	'options' => $test_array
	// );

	// $options[] = array(
	// 	'name' => __( 'Input Select Wide', ThemeDomain ),
	// 	'desc' => __( 'A wider select box.', ThemeDomain ),
	// 	'id' => 'example_select_wide',
	// 	'std' => 'two',
	// 	'type' => 'select',
	// 	'options' => $test_array
	// );

	// if ( $options_categories ) {
	// 	$options[] = array(
	// 		'name' => __( 'Select a Category', ThemeDomain ),
	// 		'desc' => __( 'Passed an array of categories with cat_ID and cat_name', ThemeDomain ),
	// 		'id' => 'example_select_categories',
	// 		'type' => 'select',
	// 		'options' => $options_categories
	// 	);
	// }

	// if ( $options_tags ) {
	// 	$options[] = array(
	// 		'name' => __( 'Select a Tag', 'options_check' ),
	// 		'desc' => __( 'Passed an array of tags with term_id and term_name', 'options_check' ),
	// 		'id' => 'example_select_tags',
	// 		'type' => 'select',
	// 		'options' => $options_tags
	// 	);
	// }

	// $options[] = array(
	// 	'name' => __( 'Select a Page', ThemeDomain ),
	// 	'desc' => __( 'Passed an pages with ID and post_title', ThemeDomain ),
	// 	'id' => 'example_select_pages',
	// 	'type' => 'select',
	// 	'options' => $options_pages
	// );

	// $options[] = array(
	// 	'name' => __( 'Input Radio (one)', ThemeDomain ),
	// 	'desc' => __( 'Radio select with default options "one".', ThemeDomain ),
	// 	'id' => 'example_radio',
	// 	'std' => 'one',
	// 	'type' => 'radio',
	// 	'options' => $test_array
	// );

	// $options[] = array(
	// 	'name' => __( 'Example Info', ThemeDomain ),
	// 	'desc' => __( 'This is just some example information you can put in the panel.', ThemeDomain ),
	// 	'type' => 'info'
	// );

	// $options[] = array(
	// 	'name' => __( 'Input Checkbox', ThemeDomain ),
	// 	'desc' => __( 'Example checkbox, defaults to true.', ThemeDomain ),
	// 	'id' => 'example_checkbox',
	// 	'std' => '1',
	// 	'type' => 'checkbox'
	// );

	// $options[] = array(
	// 	'name' => __( 'Advanced Settings', ThemeDomain ),
	// 	'type' => 'heading'
	// );

	// $options[] = array(
	// 	'name' => __( 'Check to Show a Hidden Text Input', ThemeDomain ),
	// 	'desc' => __( 'Click here and see what happens.', ThemeDomain ),
	// 	'id' => 'example_showhidden',
	// 	'type' => 'checkbox'
	// );

	// $options[] = array(
	// 	'name' => __( 'Hidden Text Input', ThemeDomain ),
	// 	'desc' => __( 'This option is hidden unless activated by a checkbox click.', ThemeDomain ),
	// 	'id' => 'example_text_hidden',
	// 	'std' => 'Hello',
	// 	'class' => 'hidden',
	// 	'type' => 'text'
	// );

	$options[] = array(
		'name' => __( '住所アイコン', ThemeDomain ),
		'id' => 'icon_address',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( '住所', ThemeDomain ),
		'id' => 'address',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'メールアイコン', ThemeDomain ),
		'id' => 'icon_mail',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'メール', ThemeDomain ),
		'id' => 'mail',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'TEL アイコン', ThemeDomain ),
		'id' => 'icon_phone',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'TEL', ThemeDomain ),
		'id' => 'phone',
		'type' => 'text'
	);



	// $options[] = array(
	// 	'name' => "Example Image Selector",
	// 	'desc' => "Images for layout.",
	// 	'id' => "example_images",
	// 	'std' => "2c-l-fixed",
	// 	'type' => "images",
	// 	'options' => array(
	// 		'1col-fixed' => $imagepath . '1col.png',
	// 		'2c-l-fixed' => $imagepath . '2cl.png',
	// 		'2c-r-fixed' => $imagepath . '2cr.png'
	// 	)
	// );

	// $options[] = array(
	// 	'name' =>  __( 'Example Background', ThemeDomain ),
	// 	'desc' => __( 'Change the background CSS.', ThemeDomain ),
	// 	'id' => 'example_background',
	// 	'std' => $background_defaults,
	// 	'type' => 'background'
	// );

	// $options[] = array(
	// 	'name' => __( 'Multicheck', ThemeDomain ),
	// 	'desc' => __( 'Multicheck description.', ThemeDomain ),
	// 	'id' => 'example_multicheck',
	// 	'std' => $multicheck_defaults, // These items get checked by default
	// 	'type' => 'multicheck',
	// 	'options' => $multicheck_array
	// );

	// $options[] = array(
	// 	'name' => __( 'Colorpicker', ThemeDomain ),
	// 	'desc' => __( 'No color selected by default.', ThemeDomain ),
	// 	'id' => 'example_colorpicker',
	// 	'std' => '',
	// 	'type' => 'color'
	// );

	// $options[] = array( 'name' => __( 'Typography', ThemeDomain ),
	// 	'desc' => __( 'Example typography.', ThemeDomain ),
	// 	'id' => "example_typography",
	// 	'std' => $typography_defaults,
	// 	'type' => 'typography'
	// );

	// $options[] = array(
	// 	'name' => __( 'Custom Typography', ThemeDomain ),
	// 	'desc' => __( 'Custom typography options.', ThemeDomain ),
	// 	'id' => "custom_typography",
	// 	'std' => $typography_defaults,
	// 	'type' => 'typography',
	// 	'options' => $typography_options
	// );

	// $options[] = array(
	// 	'name' => __( 'Text Editor', ThemeDomain ),
	// 	'type' => 'heading'
	// );

	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	// $wp_editor_settings = array(
	// 	'wpautop' => true, // Default
	// 	'textarea_rows' => 5,
	// 	'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	// );

	// $options[] = array(
	// 	'name' => __( 'Default Text Editor', ThemeDomain ),
	// 	'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', ThemeDomain ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
	// 	'id' => 'example_editor',
	// 	'type' => 'editor',
	// 	'settings' => $wp_editor_settings
	// );

	return $options;
}