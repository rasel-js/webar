<?php

//One click demo import
require_once get_template_directory(). '/inc/one-click-demo-data.php';

//Tgm activator
require_once(get_theme_file_path( '/inc/tgm.php' ));

//Redux framework
require_once('lib/redux/redux-core/framework.php');
require_once('inc/redux-config.php');



//Version controll
if(site_url() == 'http://localhost/premium/') {
    define('VERSION', time() );
} else {
    define('VERSION', wp_get_theme()->get('Version'));
}

//Main bootstrapping
function webar_theme_setup() {

    // load_theme_webar('webar', get_template_directory(). '/languages');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    

    
    
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'webar'),
        'footer_menu' => __('Footer Menu', 'webar')
    ));

    //Custom image size
    add_image_size('webar-image-size', 330, 210, true );
    
}
add_action('after_setup_theme', 'webar_theme_setup');



/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function webar_custom_excerpt( $length ) {
    return 27;
}
add_filter( 'excerpt_length', 'webar_custom_excerpt', 999 );

function new_excerpt_mores( $more ) {
	return '.......';
}
add_filter('excerpt_more', 'new_excerpt_mores');




/**
 * Add a sidebar.
 */
function webar_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Area', 'webar' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'webar' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'webar_widgets_init' );






// All style and scripts file
function webar_theme_assets() {
    wp_enqueue_style('poppins-font', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700', null, VERSION);
    wp_enqueue_style('bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), null, VERSION);
    wp_enqueue_style('fontawesome-css', get_theme_file_uri( '/assets/css/font-awesome.min.css' ), null, VERSION);
    // wp_enqueue_style('owl-carousel-css', get_theme_file_uri( '/assets/css/owl.carousel.css' ), null);
    wp_enqueue_style('main-css', get_theme_file_uri( '/assets/css/style.css' ), null, VERSION);
    wp_enqueue_style('responsive-css', get_theme_file_uri( '/assets/css/responsive.css' ), null, VERSION);

 

    

    wp_enqueue_script('jquery-main', get_theme_file_uri( 'assets/js/jquery.min.js' ), null, VERSION);
    wp_enqueue_script('popper-js', get_theme_file_uri( 'assets/js/popper.min.js' ), array('jquery'), VERSION);
    wp_enqueue_script('bootstrap-js', get_theme_file_uri( 'assets/js/bootstrap.min.js' ), null, VERSION, true);
    wp_enqueue_script('one-page-nav-js', get_theme_file_uri( 'assets/js/one-page-nav.js' ), null, VERSION, true);
    wp_enqueue_script('isotope-filter', get_theme_file_uri( 'assets/js/isotope.min.js' ), array('jquery'), VERSION, true);
    wp_enqueue_script('imageloaded', get_theme_file_uri( 'assets/js/imageloaded.min.js' ), array('jquery'), VERSION, true);
    wp_enqueue_script('counterup', get_theme_file_uri( 'assets/js/jquery.counterup.min.js' ), array('jquery'), VERSION, true);
    wp_enqueue_script('waypoint', get_theme_file_uri( 'assets/js/waypoint.min.js' ), array('jquery'), VERSION, true);
    wp_enqueue_script('main-js', get_theme_file_uri( 'assets/js/main.js' ), array(), null, VERSION, true);
}
add_action('wp_enqueue_scripts', 'webar_theme_assets');

