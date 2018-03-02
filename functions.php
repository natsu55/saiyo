<?php
/**
 * luggage functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package luggage
 */

if ( ! function_exists( 'luggage_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function luggage_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on luggage, use a find and replace
	 * to change ThemeDomain to the name of your theme in all the template files.
	 */
	load_theme_textdomain( ThemeDomain, get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', ThemeDomain ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'luggage_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'luggage_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function luggage_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'luggage_content_width', 640 );
}
add_action( 'after_setup_theme', 'luggage_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function luggage_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', ThemeDomain ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', ThemeDomain ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'luggage_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function luggage_scripts() {
	wp_enqueue_style( 'saiyo-style', get_stylesheet_uri() );

    wp_enqueue_style( 'saiyo-bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css' );
    wp_enqueue_style( 'saiyo-font', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css' );
    wp_enqueue_style( 'saiyo-konnect', get_template_directory_uri() . '/css/konnect-slider.css' );
    wp_enqueue_style( 'saiyo-animate', get_template_directory_uri() . '/css/animate.css' );
    wp_enqueue_style( 'saiyo-theme', get_template_directory_uri() . '/css/theme.css' );
    wp_enqueue_style( 'saiyo-red', get_template_directory_uri() . '/css/red.css' );
    wp_enqueue_style( 'saiyo-custom', get_template_directory_uri() . '/css/custom.css' );

	wp_enqueue_script( 'saiyo-jquery', get_template_directory_uri() . '/assets/jquery/jquery.min.js', array(), '', true );
	wp_enqueue_script( 'saiyo-customizer', get_template_directory_uri() . '/js/customizer.js', array(), '', true );
	wp_enqueue_script( 'saiyo-default', get_template_directory_uri() . '/js/default.js', array(), '', true );
	wp_enqueue_script( 'saiyo-ellipsis', get_template_directory_uri() . '/js/ellipsis.min.js', array(), '', true );
	wp_enqueue_script( 'saiyo-flex-slider', get_template_directory_uri() . '/js/jquery.flexslider.min.js', array(), '', true );
	wp_enqueue_script( 'saiyo-konnect-slider', get_template_directory_uri() . '/js/konnect-slider.js', array(), '', true );
	wp_enqueue_script( 'saiyo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '', true );
	wp_enqueue_script( 'saiyo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'luggage_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';

define( 'RWMB_URL', trailingslashit( get_template_directory_uri() . '/inc/meta-box-master' ) );
define( 'RWMB_DIR', trailingslashit( get_template_directory() . '/inc/meta-box-master' ) );
require_once RWMB_DIR . 'meta-box.php';
require_once RWMB_DIR . 'meta-box-include-exclude.php';
include RWMB_DIR . 'config-meta-boxes.php';



/*
 * This one shows/hides the an option when a checkbox is clicked.
 *
 */
add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});

	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}

});
</script>

<?php
}

define("ThemeDomain", 'wonderful_wedding');
