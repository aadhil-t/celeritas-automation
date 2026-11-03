<?php
/*------- Theme Supports ---------*/
add_action( 'after_setup_theme', 'res_theme_support' );
function res_theme_support() {
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    //add_theme_support( 'post-formats' );
    add_theme_support('post-thumbnails');
    add_post_type_support('page', 'excerpt');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    // Woocommerce Support
    add_theme_support( 'woocommerce' );
    //Woocommerce gallery support
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    /*** end ***/
}

/* Flush rewrite rules for custom post types. */
add_action( 'after_switch_theme', 'awpr_flush_rewrite_rules' );
function awpr_flush_rewrite_rules() {
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}

/*------------- Disallow Backend Editting ----------------*/
define( 'DISALLOW_FILE_EDIT', true );

/*-------------- Disable XMLRPC ---------------------*/
add_filter('xmlrpc_enabled', '__return_false');

/*------------- Hide Wordpress Version Generator ---------------*/
add_filter('the_generator', 'version');
function version() {
  return '';
}

/*----------- Remove WP-Embed script ---------------*/
function disable_embeds_init() {
    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');
    // Turn off oEmbed auto discovery.
    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');
}
add_action('init', 'disable_embeds_init', 9999);

/*------- Remove emoji script and css ------*/
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/*---------- Include BFI Thumb ---------------*/
//require_once('includes/BFI_Thumb.php');

/*---------------acf Settings ----------*/
include_once( 'includes/acf-pro/acf.php' );

/*---------------acf Blocks Settings ----------*/
include_once( 'includes/acf-blocks.php' );

add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
	// update path
	$path = get_bloginfo('stylesheet_directory') . '/includes/acf-pro/';
	// return
	return $path;
}

add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
	// update path
	$dir = get_stylesheet_directory_uri() . '/includes/acf-pro/';
	// return
	return $dir;
}

/**
 * acf options page
*/
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title'  => 'Theme General Settings',
		'menu_title'  => 'Theme Options',
		'menu_slug'   => 'theme-general-settings',
		'capability'  => 'edit_posts',
		'redirect'    => false
	));

	acf_add_options_sub_page(array(
		'page_title'  => 'Social Media',
		'menu_title'  => 'Social Media',
		'parent_slug' => 'theme-general-settings',
	));
    acf_add_options_sub_page(array(
		'page_title'  => 'Miscellaneous',
		'menu_title'  => 'Miscellaneous',
		'parent_slug' => 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title'  => 'Footer',
		'menu_title'  => 'Footer',
		'parent_slug' => 'theme-general-settings',
	));
}

/**
 * Remove acf sttings from backend
*/
//add_filter( 'acf/settings/show_admin', '__return_false' );

/*------- Excerpt -------*/
function new_excerpt_length($length) {
    return 200;  // length used for media press release
}
add_filter('excerpt_length', 'new_excerpt_length');

function trim_excerpt($more) {
    return '...';
}
add_filter('excerpt_more', 'trim_excerpt');
/*** end ***/

/*----- svg support -----*/
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/*----- custom post archive -----*/
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if(is_category() || is_tag() || is_month() || is_day() || is_year()) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = get_post_types();
    $query->set('post_type',$post_type);
    return $query;
  }
}

/*----- Wp Login Page Logo Link ------*/
add_filter( 'login_headerurl', 'custom_loginlogo_url' );
function custom_loginlogo_url($url) {
	return get_home_url();
}

/*------ Wp login Page Logo Change ---------*/
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url('<?php echo get_field('logo', 'option'); ?>');
            padding-bottom: 0;
            background-size: 311px auto;
            height: 90px;
            width: 311px;
        }
		body.login.js.login-action-login {
			background: #1D4856;
		}
		.login #backtoblog a, .login #nav a {
			color: #fff !important;
		}
    </style>
<?php }

/*------- Enqueue Scripts & Styles --------*/
add_action('wp_enqueue_scripts', 'theme_scripts_styles');
function theme_scripts_styles() {
	wp_deregister_script('jquery');
    wp_deregister_script('jquery-migrate');
    wp_deregister_script('jquery-min-map');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery3.7.1.js');
    wp_register_script('jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate-3.4.0.min.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-migrate');

    //Scripts
    // wp_register_script( 'validate', get_template_directory_uri() . '/js/validate.js', array('jquery'), '', true );
    // wp_register_script( 'imglazy', get_template_directory_uri() . '/js/imglazy.min.js', array('jquery'), '', true );

    //Custom
	// wp_register_script('magnificPopup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true);
	// wp_register_script('swiper', get_template_directory_uri() . '/js/swiper.js', array('jquery'), '', true);
	wp_register_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), '', true);
	// wp_register_script('swiper-bundle', get_template_directory_uri() . '/js/swiper-bundle.min.js', array('jquery'), '', true);
	wp_register_script('aos', get_template_directory_uri() . '/js/aos.js', array('jquery'), '', true);
    wp_register_script( 'common_scripts', get_template_directory_uri() . '/js/common.js', array('jquery'), '', true );
    // wp_register_script( 'home_scripts', get_template_directory_uri() . '/js/home-scripts.js', array('jquery'), '', true );
    // wp_register_script('smoothscrolling', get_template_directory_uri() . '/js/smoothscrolling.js', array('jquery'), '', true);
	wp_register_script('slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true);
    // wp_register_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), '', true);
    // wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
	// wp_register_script('parallax-scroll', get_template_directory_uri() . '/js/jquery.parallax-scroll.js', array('jquery'), '', true);
	// wp_register_script('lottie-player', get_template_directory_uri() . '/js/lottie-player.js', array('jquery'), '', true);
 // wp_register_script('videocontrol', get_template_directory_uri() . '/js/video-control.js', array('jquery'), '', true);
    // wp_register_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true);
	// wp_register_script('youtube_codegena', get_template_directory_uri() . '/js/async_youtube_player.js', array('jquery'), '', true);
    // wp_register_script('select2', get_template_directory_uri() . '/js/select2.full.min.js', array('jquery'), '', true);
    // wp_register_script('curvedslider', get_template_directory_uri() . '/js/curvedslider.js', array('jquery'), '', true);







	wp_enqueue_script('aos');
	wp_enqueue_script('swiper');

    wp_enqueue_script('common_scripts');
	wp_enqueue_script('smoothscrolling');


    

    if (is_front_page() || is_home()) {
        wp_enqueue_script('home_scripts');

    } 
}

/*------ Remove script attributes -------*/
add_filter('style_loader_tag', 'mtheme_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'mtheme_remove_type_attr', 10, 2);
function mtheme_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}

/**
 * Adding Defer attribute to scripts
*/
add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);
function add_defer_attribute($tag, $handle) {
    // add script handles to the array below
    $scripts_to_defer = array('google_map');
    
    foreach($scripts_to_defer as $defer_script) {
       if ($defer_script === $handle) {
          return str_replace(' src', ' defer="defer" src', $tag);
       }
    }
    return $tag;
}

/*------- remove css and js versions --------*/
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

/*-------- Move header scripts to footer ------*/
function remove_head_scripts() { 
    remove_action('wp_head', 'wp_print_scripts'); 
    remove_action('wp_head', 'wp_print_head_scripts', 9); 
    remove_action('wp_head', 'wp_enqueue_scripts', 1);

    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5); 
} 
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );

/*------ Register Navigation Menu -------*/
register_nav_menus( 
    array(
        'header_menu' => 'Header Menu',
        'mobile_header_menu' => 'Mobile_Header Menu',
		'footer_menu1'=> 'Footer Menu1',
		'footer_menu2'=> 'Footer Menu2',
		'footer_menu3'=> 'Footer Menu3',
	)
);

/*---------- Register Widgets Area ---------*/
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
	register_sidebar(array(
        'id' => 'footer_widgets',
		'name' => 'Footer Widgets',
		'before_widget' => '<div class="fw-inner-col col-sm-3">',
		'after_widget' => '</div></div>',
		'before_title' => '<h5 class="fw-title">',
		'after_title' => '</h5><div class="fw-content">',
	));
}

/*----------- Register Post Type ------------*/
function theme_posttype() {
	//Services POST TYPE
    register_post_type('services', array(
        'label' => 'Services',
        'description' => '',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'query_var' => true,
        'exclude_from_search' => false,
        'publicly_queryable'    => true,
        'menu_icon' => 'dashicons-admin-generic',
        'has_archive'  => false,
        'show_in_rest' => true,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt','author'),
        'labels' => array(
            'name' => 'Services  ',
            'singular_name' => 'Services  ',
            'featured_image' => __('Featured Image Upload Image 580 X 391 Size'),
            'menu_name' => 'Services',
            'add_new' => 'Add New Services',
            'add_new_item' => 'Add New Services',
            'edit' => 'Edit Services',
            'edit_item' => 'Edit Services',
            'new_item' => 'New Services',
            'view' => 'View Services',
            'view_item' => 'View Services',
            'search_items' => 'Search Services',
            'not_found' => 'No Services Found',
            'not_found_in_trash' => 'No Services Found in Trash',
            'parent' => 'Parent Services'
        ) 
    ));
	//Products POST TYPE
	register_post_type('products', array(
		'label' => 'Products',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'query_var' => true,
		'exclude_from_search' => false,
		'publicly_queryable'    => true,
		'menu_icon' => 'dashicons-products',
		'has_archive'           => false,
		'show_in_rest' => true,
		'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
		'labels' => array(
			'name' => 'Products',
			'singular_name' => 'Products',
			'featured_image' => __('Featured Image (Upload Image 380 X 318 Size)'),
			'menu_name' => 'Products',
			'add_new' => 'Add New Products',
			'add_new_item' => 'Add New Products',
			'edit' => 'Edit Products',
			'edit_item' => 'Edit Products',
			'new_item' => 'New Products',
			'view' => 'View Products',
			'view_item' => 'View Products',
			'search_items' => 'Search Products',
			'not_found' => 'No Products Found',
			'not_found_in_trash' => 'No Products Found in Trash',
			'parent' => 'Parent Products'
		) 
	));
	//Events POST TYPE
	register_post_type('events', array(
		'label' => 'events',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'query_var' => true,
		'exclude_from_search' => false,
		'publicly_queryable'    => true,
		'menu_icon' => 'dashicons-calendar',
		'has_archive'           => false,
		'show_in_rest' => true,
		'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
		'labels' => array(
			'name' => 'events',
			'singular_name' => 'events',
			'featured_image' => __('Featured Image (Upload Maximum Image 800 X 440 Size)'),
			'menu_name' => 'events',
			'add_new' => 'Add New events',
			'add_new_item' => 'Add New events',
			'edit' => 'Edit events',
			'edit_item' => 'Edit events',
			'new_item' => 'New events',
			'view' => 'View events',
			'view_item' => 'View events',
			'search_items' => 'Search events',
			'not_found' => 'No events Found',
			'not_found_in_trash' => 'No events Found in Trash',
			'parent' => 'Parent events'
		) 
	));
	//News POST TYPE
	register_post_type('News', array(
		'label' => 'News',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'query_var' => true,
		'exclude_from_search' => false,
		'publicly_queryable'    => true,
		'menu_icon' => 'dashicons-visibility',
		'has_archive'           => false,
		'show_in_rest' => true,
		'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
		'labels' => array(
			'name' => 'News',
			'singular_name' => 'News',
			'featured_image' => __('Featured Image (Upload Image 305 X 116 Size)'),
			'menu_name' => 'News',
			'add_new' => 'Add New News',
			'add_new_item' => 'Add New News',
			'edit' => 'Edit News',
			'edit_item' => 'Edit News',
			'new_item' => 'New News',
			'view' => 'View News',
			'view_item' => 'View News',
			'search_items' => 'Search News',
			'not_found' => 'No News Found',
			'not_found_in_trash' => 'No News Found in Trash',
			'parent' => 'Parent News'
		) 
	));
	//Jobs POST TYPE
	register_post_type('jobs', array(
		'label' => 'jobs',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'query_var' => true,
		'exclude_from_search' => false,
		'publicly_queryable'    => true,
		'menu_icon' => 'dashicons-businessperson',
		'has_archive'           => false,
		'show_in_rest' => true,
		'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
		'labels' => array(
			'name' => 'jobs',
			'singular_name' => 'jobs',
			'featured_image' => __('Featured Image '),
			'menu_name' => 'jobs',
			'add_new' => 'Add New jobs',
			'add_new_item' => 'Add New jobs',
			'edit' => 'Edit jobs',
			'edit_item' => 'Edit jobs',
			'new_item' => 'New jobs',
			'view' => 'View jobs',
			'view_item' => 'View jobs',
			'search_items' => 'Search jobs',
			'not_found' => 'No jobs Found',
			'not_found_in_trash' => 'No jobs Found in Trash',
			'parent' => 'Parent jobs'
		) 
	));

}
add_action('init', 'theme_posttype');



/*------------------------ Register taxonomies --------------------------*/
function add_custom_taxonomies() {


    /*------------------------ Domain --------------------------*/
    register_taxonomy('domain_cat', array('products'), array(
        'hierarchical' => true,
        'has_archive' => true,
        'public' => false,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => _x('Domain Category', 'taxonomy general name'),
            'singular_name' => _x('Domain Category', 'taxonomy singular name'),
            'search_items' => __('Search Category'),
            'all_items' => __('All Category'),
            'parent_item' => __('Parent Category'),
            'parent_item_colon' => __('Parent Category:'),
            'edit_item' => __('Edit Category'),
            'update_item' => __('Update Category'),
            'add_new_item' => __('Add New Category'),
            'new_item_name' => __('New Category Name'),
            'menu_name' => __('Domain Category'),
        ),
        'rewrite' => array(
            'with_front'   => false,
            'hierarchical' => true,
            'ep_mask'      => EP_NONE
            )
    ));




    /*------------------------ Products --------------------------*/
    register_taxonomy('product_cat', array('products'), array(
        'hierarchical' => true,
        'has_archive' => false,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => _x('Products Category', 'taxonomy general name'),
            'singular_name' => _x('Products Category', 'taxonomy singular name'),
            'search_items' => __('Search Category'),
            'all_items' => __('All Category'),
            'parent_item' => __('Parent Category'),
            'parent_item_colon' => __('Parent Category:'),
            'edit_item' => __('Edit Category'),
            'update_item' => __('Update Category'),
            'add_new_item' => __('Add New Category'),
            'new_item_name' => __('New Category Name'),
            'menu_name' => __('Products Category'),
        ),
        'rewrite' => array(
            'with_front'   => false,
            'hierarchical' => true,
            'ep_mask'      => EP_NONE
            )
    ));
	
    
}
add_action('init', 'add_custom_taxonomies');


?>