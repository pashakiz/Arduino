<?php
/**
 * epixx functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package epixx
 */

if ( ! function_exists( 'epixx_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function epixx_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on epixx, use a find and replace
	 * to change 'epixx' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'epixx', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'epixx' ),
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
	add_theme_support( 'custom-background', apply_filters( 'epixx_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'epixx_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function epixx_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'epixx_content_width', 640 );
}
add_action( 'after_setup_theme', 'epixx_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function epixx_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'epixx' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'epixx_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function epixx_scripts() {
	wp_enqueue_style( 'epixx-style', get_stylesheet_uri() );

	wp_enqueue_script( 'epixx-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'epixx-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'epixx_scripts' );

/**
 * Mail forms and save data to DataBase (Contact form 7 to DB)
 */
function send_form(){
	$recepient = "pashakiz@gmail.com";
	$pagetitle = "Новая заявка с сайта Arduino";

	$wichForm = trim($_POST["form_title"]);
	$name = trim($_POST["wpname"]);
	$email = trim($_POST["wpemail"]);
	$phone = trim($_POST["wpphone"]);
	$org = trim($_POST["wporg"]);

	if ($wichForm == "Form1") {
		if (!$name || !$email) {
			echo "Error: no parametrs in POST";
			exit;
		}
		$message = "Имя: $name\r\nEmail: $email";
	}

	if ($wichForm == "Form2") {
		if (!$name || !$email || !$phone ||!$org) {
			echo "Error: no parametrs in POST";
			exit;
		}
		$message = "Имя: $name\r\nEmail: $email\r\nТелефон: $phone\r\nУчебное заведение: $org";
	}

	$mailreturn = mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"$EOL From: $name <$email>");
	echo "mail:".$mailreturn."\r\n";

	/* contact-form-7-to-database */
	require_once(ABSPATH . '/wp-content/plugins/contact-form-7-to-database-extension/CFDBShortCodeSavePostData.php');
	$handler = new CFDBShortCodeSavePostData;
	$handler->handleShortcode(null);
	//$handler->handleShortcode(array('debug' => 'true'));
}
add_action('wp_ajax_send_form', 'send_form');
add_action('wp_ajax_nopriv_send_form', 'send_form');

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
