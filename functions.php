<?php
/**
 * acf_ashraf functions and definitions
 * @package acf_ashraf
 */

/**
 * Load Custom Comments Layout file.
 */
//require get_template_directory() . '/inc/comments-helper.php';

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

	register_sidebar( array(
        'name'          => __('Blog Sidebar', 'acf_ashraf' ),
        'id'            => 'blog_sidebar',
        'description'   => __('Blog Sidebar widget.', 'acf_ashraf'),
        'before_widget' => '<div class="sidebar-box ftco-animate">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
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
	wp_enqueue_style( 'template-style-css', get_template_directory_uri().'/assets/css/template-style.css',null,VERSION );
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
		// About Sub Page
		$child = acf_add_options_page(array(
			'page_title'  => __('About Page Options','acf_ashraf'),
			'menu_title'  => __('About Page Options','acf_ashraf'),
			'parent_slug' => $parent['menu_slug'],
		));
		// Services Sub Page
		$child = acf_add_options_page(array(
			'page_title'  => __('Services Page Options','acf_ashraf'),
			'menu_title'  => __('Services Page Options','acf_ashraf'),
			'parent_slug' => $parent['menu_slug'],
		));
		// Contact Sub Page
		$child = acf_add_options_page(array(
			'page_title'  => __('Contact Page Options','acf_ashraf'),
			'menu_title'  => __('Contact Page Options','acf_ashraf'),
			'parent_slug' => $parent['menu_slug'],
		));
		// Blog Sub Page
		$child = acf_add_options_page(array(
			'page_title'  => __('Blog Page Options','acf_ashraf'),
			'menu_title'  => __('Blog Page Options','acf_ashraf'),
			'parent_slug' => $parent['menu_slug'],
		));
	}
}

//function for comment wp_comment_list()
function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>

    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>">

	<?php 
    if ( 'div' != $args['style'] ) { ?>
	 <div class="comment-author vcard">
			<?php 
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
            } 
			?>
        </div>
		
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php
    } ?>

       

		<?php 
        if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
        } ?>

        <div class="comment-meta commentmetadata">
			<div class="comment-date">
			<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
			 printf( __( '<h4 class="fn">%s</h4>' ), get_comment_author_link() ); 
                /* translators: 1: date, 2: time */
                printf( 
                    __('%1$s at %2$s'), 
                    get_comment_date(),  
                    get_comment_time() 
                ); ?>
            </a>

			<?php edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
			</div>
           
			<?php comment_text(); ?>

			<div class="comment-reply">
			<?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
                            'add_below' => $add_below, 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] ,
							
                        ) 
                    ) 
                ); ?>
        </div>
        </div>

		<?php 
    if ( 'div' != $args['style'] ) : ?>

        </div>
		<?php endif;
}
//to rearrange comment reply form
add_filter( 'comment_form_fields', 'move_comment_field' );
function move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
//remove wp comment Save my name, email, and website in this browser for the next time I comment checkbox
add_filter( 'comment_form_default_fields', 'wc_comment_form_hide_cookies' );
function wc_comment_form_hide_cookies( $fields ) {
	unset( $fields['cookies'] );
	return $fields;
}


// Creating the category widget 
class acf_ashraf_cat_widget extends WP_Widget {
  
	function __construct() {
	parent::__construct(
	  
	// Base ID of your widget
	'cat_widget', 
	  
	// Widget name will appear in UI
	__('Services Widget', 'acf_ashraf'), 
	  
	// Widget description
	array( 'description' => __( 'Services Category Widget', 'acf_ashraf' ), ) 
	);
	}
	  
	// Creating widget front-end
	  
	public function widget( $args, $instance ) {
	$title = apply_filters( 'widget_title', $instance['title'] );
	  
	// before and after widget arguments are defined by themes
	echo $args['before_widget'];
	if ( ! empty( $title ) )
	echo $args['before_title'] . $title . $args['after_title'];
	  ?>
		<div class="categories">
			<?php
			$categories = get_categories();
			foreach($categories as $category) {
				?>
				<li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?><span class="fa fa-chevron-right"></span></a></li>

				<?php
			}
			?>
	
		</div>
	  <?php
	
	echo $args['after_widget'];
	}
			  
	// Widget Backend 
	public function form( $instance ) {
	if ( isset( $instance[ 'title' ] ) ) {
	$title = $instance[ 'title' ];
	}
	else {
	$title = __( 'Services', 'acf_ashraf' );
	}
	// Widget admin form
	?>
	<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	</p>
	<?php 
	}
		  
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
	$instance = array();
	$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	return $instance;
	}
	 
	// Class cat_widget ends here
	} 
	 
	 
	// Register and load the widget
	function acf_cat_load_widget() {
		register_widget('acf_ashraf_cat_widget');
	}
	add_action( 'widgets_init', 'acf_cat_load_widget' );


/**
 * Recent Blog  widget 
 *  */ 
class acf_ashraf_recent_blog_widget extends WP_Widget {
  
	function __construct() {
	parent::__construct(
	  
	// Base ID of your widget
	'recent_blog_widget', 
	  
	// Widget name will appear in UI
	__('Recent Blog Widget', 'acf_ashraf'), 
	  
	// Widget description
	array( 'description' => __( 'Recent Blog Widget', 'acf_ashraf' ), ) 
	);
	}
	  
	// Creating widget front-end
	  
	public function widget( $args, $instance ) {
	$title = apply_filters( 'widget_title', $instance['title'] );
	  
	// before and after widget arguments are defined by themes
	echo $args['before_widget'];
	if ( ! empty( $title ) )
	echo $args['before_title'] . $title . $args['after_title'];
		$post = array(
			'post_type'	=>'post',
			'posts_per_page'	=> 3,
		);
		$acf_ashraf_query = New WP_Query($post);
		while($acf_ashraf_query->have_posts()){
			$acf_ashraf_query->the_post();
			?>
			<div class="block-21 mb-4 d-flex">
			<a class="blog-img mr-4" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></a>
				<div class="text">
					<h3 class="heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
					<div class="meta">
						<div><a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));  ?>" class="entry-date"><?php the_time('F j, Y') ?></a></div>
						<div><a><?php acf_ashraf_posted_by();?></a></div>

					</div>
				</div>
			</div>
			<?php
		}
	  ?>
		 
	  <?php
	
	echo $args['after_widget'];
	}
			  
	// Widget Backend 
	public function form( $instance ) {
	if ( isset( $instance[ 'title' ] ) ) {
	$title = $instance[ 'title' ];
	}
	else {
	$title = __( 'Recent Blog', 'acf_ashraf' );
	}
	// Widget admin form
	?>
	<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	</p>
	<?php 
	}
		  
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
	$instance = array();
	$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	return $instance;
	}
	 
	// Class cat_widget ends here
	} 
	 
	 
	// Register and load the widget
	function acf_recent_blog_load_widget() {
		register_widget('acf_ashraf_recent_blog_widget');
	}
	add_action( 'widgets_init', 'acf_recent_blog_load_widget' );

	/**
	 * Display post author link
	 */

	function acf_ashraf_posted_by() {
		$byline = sprintf(
			esc_html_x( ' %s', 'post author', 'acf_ashraf' ),
			'<span class="author vcard"><a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);
	
		echo $byline ;
	}