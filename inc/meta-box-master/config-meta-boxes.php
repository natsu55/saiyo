<?php
add_filter( 'rwmb_meta_boxes', 'gm_register_meta_boxes' );
function gm_register_meta_boxes( $meta_boxes ) {
	$prefix = 'gm_';

	// $meta_boxes[] = array(
	// 	'title'      => 'Standard Fields',
	// 	'id'         => 'standard',
	// 	'post_types' => array('page'),
	// 	//'taxonomies' => array('category','post_tag','keyword'), // List of taxonomies. Array or string
	// 	'fields' => array(
	// 		array(
	// 			'name' => __( 'Category Image', ThemeDomain ),
	// 			'id'   => 'image_advanced',
	// 			'type' => 'image_advanced',
	// 		),
	// 		array(
	// 			'name' => __( 'Order', ThemeDomain ),
	// 			'id'   => 'meta_order',
	// 			'type' => 'text',
	// 		),
	// 	),
	// );

//HOME meta boxes :: START
	$meta_boxes[] = array(
		'title'      => 'Page Settings',
		'id'         => 'post-setting',
		'post_types' => array('page'), // List of taxonomies. Array or string
		'priority'	=> 'low',
		'include'	=> array(
				'template' => array('index.php'),

			),

		'fields' => array(
			array(
				'name' => __( 'Top Banner Image', ThemeDomain ),
				'id'   => 'top_banner',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),

			//SECTION HOME-1
			array(
				'id' => 'sectionheading',
				'type' => 'wysiwyg',
				'name' => esc_html__( '大同生命保険について', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 1,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
			array(
				'id' => 'paraheading',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Section Heading', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 1,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
			array(
				'id' => 'sectioncontent',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Section Contents', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
			array(
				'name' => __( 'Section Image', ThemeDomain ),
				'id'   => 'sectionimage',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),
			//SECTION HOME-2
			array(
				'id' => 'sectionheading_2',
				'type' => 'wysiwyg',
				'name' => esc_html__( '大同生命保険で働くこと', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 1,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
			array(
				'id' => 'paraheading_2',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Section Heading', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 1,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
			array(
				'id' => 'sectioncontent_2',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Section Contents', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
			array(
				'name' => __( 'Section Image', ThemeDomain ),
				'id'   => 'sectionimage_2',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),

		),
	);
//HOME meta boxes :: END

//KNOWPEOPLE meta boxes :: START

//KNOWPEOPLE meta boxes :: END

	$meta_boxes[] = array(
		'title'      => 'FAQ Settings',
		'id'         => 'faq',
		'post_types' => array('faq'), // List of taxonomies. Array or string
		'fields' => array(
			array(
				'name' => __( 'Answer', ThemeDomain ),
				'id'   => 'answer',
				'type' => 'textarea',
			),
		),
	);

	$meta_boxes[] = array(
		'title'      => 'Reviews Settings',
		'id'         => 'review',
		'post_types' => array('review'), // List of taxonomies. Array or string
		'fields' => array(
			// array(
			// 	'name' => __( 'Review Rating', ThemeDomain ),
			// 	'id'   => 'review_rating',
			// 	'type' => 'number',
			// 	'min'  => 0,
			// 	'max'  => 5,
			// 	'step' => 1,
			// ),
			array(
				'name' => __( 'Review Content', ThemeDomain ),
				'id'   => 'review_content',
				'type' => 'textarea',
			),
			array(
				'name' => __( 'Reviewer', ThemeDomain ),
				'id'   => 'review_reviewer',
				'type' => 'text',
			),
		),
	);

	// $meta_boxes[] = array(
	// 	'title'      => 'Post Settings',
	// 	'id'         => 'post-setting',
	// 	'post_types' => array('post'), // List of taxonomies. Array or string
	// 	'context'	=> 'side',
	// 	'priority'	=> 'low',
	// 	'fields' => array(
	// 		array(
	// 			'name' => __( 'Sub Featured Image', ThemeDomain ),
	// 			'id'   => 'sub-featured',
	// 			'type' => 'image_advanced',
	// 			'max_file_uploads' =>1,
	// 		),
	// 	),
	// );

	$meta_boxes[] = array(
		'title'      => 'Page Settings',
		'id'         => 'post-setting',
		'post_types' => array('page'), // List of taxonomies. Array or string
		'priority'	=> 'low',
		'include'	=> array(
				'template' => array('FAQ.php'),

			),

		'fields' => array(
			array(
				'id' => 'embed_video',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Video Embed Code', ThemeDomain ),
				'desc' => esc_html__( 'Put Video Embed Code', ThemeDomain ),
				'clone' => true,
				'sort_clone' => true,
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
		),
	);

	$meta_boxes[] = array(
		'title'      => 'Page Settings',
		'id'         => 'post-setting',
		'post_types' => array('page'), // List of taxonomies. Array or string
		'priority'	=> 'low',
		'include'	=> array(
				'template' => array('trade-template/template-promotion-3.php','trade-template/template-promotion-4.php'),

			),

		'fields' => array(
			array(
				'name' => __( 'Promotion Big Button', ThemeDomain ),
				'id'   => 'promotion-big-button',
				'type' => 'text',
			),
			array(
				'name' => __( 'Promotion Subtitle', ThemeDomain ),
				'id'   => 'promotion-subtitle',
				'type' => 'text',
			),
			array(
				'name' => __( 'Promotion Text', ThemeDomain ),
				'id'   => 'promotion-text',
				'type' => 'textarea',
			),
			array(
				'name' => __( 'Promotion Youtube', ThemeDomain ),
				'id'   => 'promotion-youtube',
				'type' => 'text',
			),
		),
	);

	$meta_boxes[] = array(
		'title'      => 'Page Settings',
		'id'         => 'post-setting',
		'post_types' => array('page'), // List of taxonomies. Array or string
		'priority'	=> 'low',
		'include'	=> array(
				'template' => array('trade-template/template-get-the-best.php'),

			),

		'fields' => array(
			array(
				'name' => __( 'Title Section', ThemeDomain ),
				'id'   => 'title_section',
				'type' => 'wysiwyg',				
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
			array(
				'name' => __( 'Video URL', ThemeDomain ),
				'id'   => 'video_url',
				'type' => 'text',
			),
			array(
				'name' => __( 'Text Below Button', ThemeDomain ),
				'id'   => 'text_below_button',
				'type' => 'wysiwyg',				
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
		),
	);

	$meta_boxes[] = array(
		'title'      => 'Renew Settings',
		'id'         => 'post-setting',
		'post_types' => array('page'), // List of taxonomies. Array or string
		'context'    => 'normal',
		'priority'	=> 'high',
		'include'	=> array(
				'template' => array('template/renew.php'),

			),

		'fields' => array(
			array(
				'name' => __( 'Title Section', ThemeDomain ),
				'id'   => 'title_section',
				'type' => 'wysiwyg',				
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
			array(
				'name' => __( 'Buttons Section', ThemeDomain ),
				'id'   => 'button_section',
				'type' => 'wysiwyg',				
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
		),
	);
	return $meta_boxes;
}

