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

	class Menu_With_Description extends Walker_Nav_Menu {
		function start_el(&$output, $item, $depth, $args) {
			global $wp_query;
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
			
			$class_names = $value = '';

			$classes = empty( $item->classes ) ? array() : (array) $item->classes;

			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
			$class_names = ' class="' . esc_attr( $class_names ) . '"';

			$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

			$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
			$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
			$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
			$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';

			$item_output = $args->before;
			$item_output .= '<a'. $attributes .'>';
			$item_output .= '<span class="menu-link">' . $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after . '</span>';
			$item_output .= '<span class="menu-desc">' . $item->description . '</span>';
			$item_output .= '</a>';
			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'saltandlight' ),
		'homepage' => esc_html__( 'Home Page', 'saltandlight' ),
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

	wp_enqueue_style( 'saltandlight-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
	wp_enqueue_style( 'saltandlight-litycss', get_template_directory_uri() . '/js/lity.min.css' );
	wp_enqueue_style( 'saltandlight-style', get_stylesheet_uri() );
	wp_enqueue_style( 'saltandlight-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,400italic,600italic,700italic' );
	wp_enqueue_script('jquery', false, array(), false, false);
	wp_enqueue_script( 'saltandlight-bsjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array(), '20151215', false );
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

// Enable ACF Options Page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}


