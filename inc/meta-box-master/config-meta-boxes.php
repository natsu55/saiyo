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


//KNOWCOMPANY meta boxes :: START
	$meta_boxes[] = array(
		'title'      => 'Page Settings',
		'id'         => 'post-setting',
		'post_types' => array('page'), // List of taxonomies. Array or string
		'priority'	=> 'low',
		'include'	=> array(
				'template' => array('KnowCompany.php'),

			),

		'fields' => array(
			array(
				'name' => __( 'Top Banner Image', ThemeDomain ),
				'id'   => 'top_banner',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),

			//SECTION KNOWCOMPANY_1
			array(
				'id' => 'sectionheading1',
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
				'id' => 'paraheading1',
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
				'id' => 'paracontent1',
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
			//SECTION KNOWCOMPANY_2
			array(
				'id' => 'sectionheading2',
				'type' => 'wysiwyg',
				'name' => esc_html__( '大同生命保険の仕事とは', ThemeDomain ),
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
				'id' => 'paraheading2',
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
				'id' => 'paracontent2',
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
            //KNOWCOMPANY SECTION HEADING ② 完全週休二日制、毎日17時に退社 
			array(
				'id' => 'paraheading3',
				'type' => 'wysiwyg',
				'name' => esc_html__( '② 完全週休二日制', ThemeDomain ),
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
				'id' => 'paracontent3',
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
			//KNOWCOMPANY SECTION HEADING ③ 未経験からでも安心できる充実の研修制度 
			array(
				'id' => 'paraheading4',
				'type' => 'wysiwyg',
				'name' => esc_html__( '③ 未経験からでも安心できる充実の研修制度', ThemeDomain ),
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
				'id' => 'paracontent4',
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
			//KNOWCOMPANY SECTION HEADING ④ 正社員、がんばり次第で収入アップも可！ 
			array(
				'id' => 'paraheading5',
				'type' => 'wysiwyg',
				'name' => esc_html__( '④ 正社員、がんばり次第で収入アップも可！', ThemeDomain ),
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
				'id' => 'paracontent5',
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
			//KNOWCOMPANY SECTION HEADING 会社概要 HEADING TABLE！ 
			array(
				'id' => 'paratableheading',
				'type' => 'wysiwyg',
				'name' => esc_html__( '会社概要', ThemeDomain ),
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
				'id' => 'paratablecontent',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Table Contents', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 8,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
			//KNOWCOMPANY SECTION HEADING GOOGLE MAP！ 
			array(
				'id' => 'googlemap',
				'type' => 'wysiwyg',
				'name' => esc_html__( '会社概要', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 6,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
		),
	);
//KNOWCOMPANY meta boxes :: END

//PROFILEBOX meta boxes :: START
	$meta_boxes[] = array(
		'title'      => 'Page Settings',
		'id'         => 'post-setting',
		'post_types' => array('page'), // List of taxonomies. Array or string
		'priority'	=> 'low',
		'include'	=> array(
				'template' => array('elements/profile-box.php'),

			),

		'fields' => array(
			array(
				'id' => 'sectionheading',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Title', ThemeDomain ),
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
				'id' => 'sectioncontents',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Description', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 1,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),

			//Profile Items
			array(
				'name' => __( 'Profile Box 1', ThemeDomain ),
				'id'   => 'profimg_1',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),
			array(
				'id' => 'proftxt_1',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Description', ThemeDomain ),
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
				'name' => __( 'Profile Box 2', ThemeDomain ),
				'id'   => 'profimg_2',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),
			array(
				'id' => 'proftxt_2',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Description', ThemeDomain ),
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
				'name' => __( 'Profile Box 3', ThemeDomain ),
				'id'   => 'profimg_3',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),
			array(
				'id' => 'proftxt_3',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Description', ThemeDomain ),
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
				'name' => __( 'Profile Box 4', ThemeDomain ),
				'id'   => 'profimg_4',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),
			array(
				'id' => 'proftxt_4',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Description', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 1,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
		),
	);
//PROFILEBOX meta boxes :: END

//KNOWPEOPLE meta boxes :: START
	$meta_boxes[] = array(
		'title'      => 'Page Settings',
		'id'         => 'post-setting',
		'post_types' => array('page'), // List of taxonomies. Array or string
		'priority'	=> 'low',
		'include'	=> array(
				'template' => array('KnowPeople.php'),

			),

		'fields' => array(
			array(
				'id' => 'sectionheading',
				'type' => 'wysiwyg',
				'name' => esc_html__( '社員インタビュー', ThemeDomain ),
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
				'name' => __( 'Top Banner Image', ThemeDomain ),
				'id'   => 'top_banner',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),
			array(
				'id' => 'bannertext',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Banner Text', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
			//SECTION KNOWPEOPLE-1
			array(
				'id' => 'paraheading',
				'type' => 'wysiwyg',
				'name' => esc_html__( '1st Section', ThemeDomain ),
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
				'id' => 'paracontent',
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
				'id'   => 'paraimage',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),
			//SECTION KNOWPEOPLE-2
			array(
				'id' => 'paraheading_2',
				'type' => 'wysiwyg',
				'name' => esc_html__( '2nd Section', ThemeDomain ),
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
				'id' => 'paracontent_2',
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
				'id'   => 'paraimage_2',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),
			//SECTION KNOWPEOPLE-3
			array(
				'id' => 'paraheading_3',
				'type' => 'wysiwyg',
				'name' => esc_html__( '3rd Section', ThemeDomain ),
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
				'id' => 'paracontent_3',
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
				'id'   => 'paraimage_3',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),
			//SECTION PEOPLELIST
			array(
				'id' => 'paraheading_list',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Employee List', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 1,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
			//PERSON 1
			array(
				'name' => __( 'Employee 1', ThemeDomain ),
				'id'   => 'empimage_1',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),
			array(
				'id' => 'emp_time_1',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Work Time', ThemeDomain ),
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
				'id' => 'emp_time_1',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Work Time', ThemeDomain ),
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
				'id' => 'emp_desc_1',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Work Description', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 2,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
			//PERSON 1
			array(
				'name' => __( 'Employee 2', ThemeDomain ),
				'id'   => 'empimage_2',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),
			array(
				'id' => 'emp_time_2',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Work Time', ThemeDomain ),
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
				'id' => 'emp_desc_2',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Work Description', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 2,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
			//PERSON 3
			array(
				'name' => __( 'Employee 3', ThemeDomain ),
				'id'   => 'empimage_3',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),
			array(
				'id' => 'emp_time_3',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Work Time', ThemeDomain ),
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
				'id' => 'emp_desc_3',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Work Description', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 2,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
			//PERSON 4
			array(
				'name' => __( 'Employee 5', ThemeDomain ),
				'id'   => 'empimage_4',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),
			array(
				'id' => 'emp_time_4',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Work Time', ThemeDomain ),
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
				'id' => 'emp_desc_4',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Work Description', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 2,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
			//PERSON 5
			array(
				'name' => __( 'Employee 5', ThemeDomain ),
				'id'   => 'empimage_5',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),
			array(
				'id' => 'emp_time_5',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Work Time', ThemeDomain ),
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
				'id' => 'emp_desc_5',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Work Description', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 2,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),
			//PERSON 6
			array(
				'name' => __( 'Employee 6', ThemeDomain ),
				'id'   => 'empimage_6',
				'type' => 'image_upload',
				'max_file_uploads' => 1,
				'max_status'       => false,
			),
			array(
				'id' => 'emp_time_6',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Work Time', ThemeDomain ),
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
				'id' => 'emp_desc_6',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Work Description', ThemeDomain ),
				'desc' => esc_html__( '---', ThemeDomain ),
				'clone' => false,
				'sort_clone' => false,
				'options' => array(
					'textarea_rows' => 2,
					'teeny'         => false,
					'media_buttons' => true,
				),
			),


		),
	);
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

