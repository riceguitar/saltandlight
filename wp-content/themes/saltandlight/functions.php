<?php
/**
 * saltandlight functions and definitions.
 * @package saltandlight
 */

if ( ! function_exists( 'saltandlight_setup' ) ) :
function saltandlight_setup() {
	load_theme_textdomain( 'saltandlight', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'saltandlight' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'saltandlight_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'saltandlight_setup' );

function saltandlight_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'saltandlight_content_width', 640 );
}
add_action( 'after_setup_theme', 'saltandlight_content_width', 0 );

function saltandlight_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'saltandlight' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'saltandlight_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function saltandlight_scripts() {

	wp_enqueue_style( 'saltandlight-bootstrap', get_template_directory_uri() . '/bootstrap.css' );
	wp_enqueue_style( 'saltandlight-litycss', get_template_directory_uri() . '/js/lity.min.css' );
	wp_enqueue_style( 'saltandlight-style', get_stylesheet_uri() );
	wp_enqueue_style( 'saltandlight-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700,400italic,600italic' );
	wp_enqueue_script('jquery', false, array(), false, false);
	wp_enqueue_script( 'saltandlight-lityjs', get_template_directory_uri() . '/js/lity.min.js', array(), '20151215', false );
	wp_enqueue_script( 'saltandlight-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'saltandlight-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'saltandlight_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/jetpack.php';

/**
* Gravity Forms Labels Support
*/
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );


