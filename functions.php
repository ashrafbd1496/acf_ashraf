<?php
/**
 * acf_ashraf functions and definitions
 * @package acf_ashraf
 */


if ( site_url() == "http://localhost/acf_ashraf" ) {
    define( "VERSION", time() );
} else {
    define( "VERSION", wp_get_theme()->get( "Version" ) );
}


if ( ! function_exists( 'acf_ashraf_setup' ) ) :
	
	function acf_ashraf_setup() {
		
		load_theme_textdomain( 'acf_ashraf', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'main-menu' => esc_html__( 'Primary', 'acf_ashraf' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'acf_ashraf_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		//To add theme template section option
		add_theme_support( 'block-templates' );

	
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'acf_ashraf_setup' );

/**
 * @global int $content_width
 */
function acf_ashraf_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'acf_ashraf_content_width', 640 );
}
add_action( 'after_setup_theme', 'acf_ashraf_content_width', 0 );

/**
 * Register widget area.
 */
function acf_ashraf_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'acf_ashraf' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'acf_ashraf' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	/**
	 * Footer Menu widget1
	 */

	 register_sidebar( array(
        'name'          => __( 'Footer Mneu 1', 'acf_ashraf' ),
        'id'            => 'footer_menu1',
        'description'   => __( 'Footer menu widget.', 'acf_ashraf' ),
        'before_widget' => '<div class="col-md-4 mb-md-0 mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="footer-heading">',
        'after_title'   => '</h2>',
    ) );
	 /**
	 * Footer Menu widget2
	 */

	 register_sidebar( array(
        'name'          => __( 'Footer Mneu 2', 'acf_ashraf' ),
        'id'            => 'footer_menu2',
        'description'   => __( 'Footer menu widget.', 'acf_ashraf' ),
        'before_widget' => '<div class="col-md-4 mb-md-0 mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="footer-heading">',
        'after_title'   => '</h2>',
    ) );
	 /**
	 * Footer Menu widget3
	 */

	 register_sidebar( array(
        'name'          => __( 'Footer Mneu 3', 'acf_ashraf' ),
        'id'            => 'footer_menu3',
        'description'   => __( 'Footer menu widget.', 'acf_ashraf' ),
        'before_widget' => '<div class="col-md-4 mb-md-0 mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="footer-heading">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'acf_ashraf_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function acf_ashraf_scripts() {
	
	wp_enqueue_style( 'google-fonts-css','//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap');

	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css',null,VERSION );
	wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri().'/assets/css/owl.carousel.min.css', null,VERSION );
	wp_enqueue_style( 'owl-theme-default-css', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', null, VERSION );
	wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri().'/assets/css/magnific-popup.css', null,VERSION );
	wp_enqueue_style( 'flaticon-css', get_template_directory_uri().'/assets/css/flaticon.css',null,VERSION );
	wp_enqueue_style( 'style-css', get_template_directory_uri().'/assets/css/style.css',null,VERSION );
    wp_enqueue_style( 'acf_ashraf-style', get_stylesheet_uri());

    
    
	//wp_style_add_data( 'acf_ashraf-style', 'rtl', 'replace' );

	//wp_enqueue_script( 'acf_ashraf-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	//wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(),VERSION, true );

	wp_enqueue_script( 'jquery-migrate-js', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'),VERSION, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'),VERSION, true );
	wp_enqueue_script( 'jquery-easing-js', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array('jquery'),VERSION, true );
	wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'),VERSION, true );
	wp_enqueue_script( 'stellar-js', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('jquery'),VERSION, true );
	wp_enqueue_script( 'animate-number-js', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', array('jquery'),VERSION, true );
	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'),VERSION, true );
	wp_enqueue_script( 'magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'),VERSION, true );
	wp_enqueue_script( 'scrollax-js', get_template_directory_uri() . '/assets/js/scrollax.min.js', array('jquery'),VERSION, true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'),VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'acf_ashraf_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
//require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// function get_page_templates( $post = null, $post_type = 'page' ) {
//     return array_flip( wp_get_theme()->get_page_templates( $post, $post_type ) );
// }

//ACF theme options

add_action('acf/init', 'acf_ashraf_op_init');
function acf_ashraf_op_init() {
	
	// Check function exists.
	if( function_exists('acf_add_options_page') ) {
		
		// Register options page. add parent
		$parent = acf_add_options_page(array(
			'page_title' 	=> __('Theme Options','ach_ashraf'),
			'menu_title' 	=> __('Theme Options','acf_ashraf'),
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));

		// Add sub page.
		$child = acf_add_options_page(array(
			'page_title'  => __('Header Options','acf_ashraf'),
			'menu_title'  => __('Header Options','acf_ashraf'),
			'parent_slug' => $parent['menu_slug'],
		));
		// Add sub page.Home page
		$child = acf_add_options_page(array(
			'page_title'  => __('Home Page Options','acf_ashraf'),
			'menu_title'  => __('Hompe Page Options','acf_ashraf'),
			'parent_slug' => $parent['menu_slug'],
		));
		// Footer Sub Page
		$child = acf_add_options_page(array(
			'page_title'  => __('Footer Options','acf_ashraf'),
			'menu_title'  => __('Footer Options','acf_ashraf'),
			'parent_slug' => $parent['menu_slug'],
		));
	}
}

