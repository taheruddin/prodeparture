<?php

add_image_size( 'featured-img', 600, 400 );

/* WP-PageNavi */
$loadWPPageNavi = FALSE;
if(!function_exists(wp_pagenavi)){
	$loadWPPageNavi = TRUE;
}
if($loadWPPageNavi) include( 'wp-pagenavi/wp-pagenavi.php');
/* Replacing twentythirteen stupid pagination with "wp-pagenavi", it is a must needed functionaliy */
function twentythirteen_paging_nav() {
	?>
	<div class="row spanFull offsetBottom">
		<?php if(function_exists(wp_pagenavi)) : wp_pagenavi(); else: if(is_admin()) echo '<p>Install and active WP-PageNavi plugin to get a numbered pagination here!</p>'; endif; ?>
	</div>
	<?php
}
/* End of - WP-PageNavi ( pagenavi-css.css is loaded in the function starbase_enqueue(), you can find it later in this file )*/
/* ************************************************************************* */

function remove_header_n_background_options() {
	/*remove_custom_background();
	remove_custom_image_header();*/
	remove_theme_support('custom-background');
	remove_theme_support('custom-header');
}
add_action( 'after_setup_theme','remove_header_n_background_options', 20 );

function options_framework_setup() {
	if ( !function_exists( 'optionsframework_init' ) ) {
		define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_stylesheet_directory_uri() . '/options-framework/' );
		define( 'OPTIONS_FRAMEWORK_URL', get_stylesheet_directory_uri() . '/options-framework/' );
		require_once dirname( __FILE__ ) . '/options-framework/options-framework.php';
	}
}
add_action( 'after_setup_theme', 'options_framework_setup' );

function custom_sidebars(){
	register_sidebar($args = array(
		'name'          => __( 'Hotline - Header Right', 'starbase' ),
		'id'            => 'hotline',
		'description'   => '',
			'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>' )
	); 
	
	register_sidebar($args = array(
		'name'          => __( 'Ad banner space - Header Right', 'starbase' ),
		'id'            => 'header-right-banner',
		'description'   => '',
			'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>' )
	);
	
	register_sidebar($args = array(
		'name'          => __( 'Ad banner space - Content Bottom', 'starbase' ),
		'id'            => 'main-bottom',
		'description'   => '',
			'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>' )
	);
	
}
add_action( 'after_setup_theme'/*'widgets_init'*/, 'custom_sidebars' );

function sidebar_name_fix() {
	/* ************************************************************************* */
	/* Sidebar Name Fix */
	remove_action( 'widgets_init', 'twentythirteen_widgets_init' );
	
	register_sidebar( array(
		'name'          => __( 'Sidebar Widget Area (#tertiary)', 'twentythirteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'twentythirteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area (#secondary)', 'twentythirteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the footer section of the site.', 'twentythirteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	/* End of - Sidebar Name Fix */
}
add_action( 'after_setup_theme','sidebar_name_fix', 20 );

/*
function greengame_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Left Side Bar', 'greengame' ),
		'id'            => 'left-side-bar',
		'description'   => __( 'Appears to the left side of the site.', 'greengame' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'greengame_widgets_init' );
*/

/* Adding more navigation menus */
function registerMoreNavMenus(){
    register_nav_menus(
    	array('secondary'=>'Main menu', 'footer-menu'=>'Footer Nav Menu')
    );
}
add_action( 'after_setup_theme', 'registerMoreNavMenus', 20);

function starbase_enqueue(){
	wp_enqueue_script( 'starbase-init', get_stylesheet_directory_uri() . '/js/init.js', array( 'jquery' ) );
	wp_dequeue_script( 'twentythirteen-script' );
	wp_enqueue_script( 'starbase-scrips', get_stylesheet_directory_uri() . '/js/functions.js', array( 'jquery' ) );
	global $loadWPPageNavi; if($loadWPPageNavi) {wp_enqueue_style('wp-pagenavi', get_stylesheet_directory_uri().'/wp-pagenavi/pagenavi-css.css', array(), '2.83', 'all' ); }
}
add_action( 'wp_enqueue_scripts', 'starbase_enqueue', 100 ); 

// Replaces the excerpt "more" text by a link
function customized_excerpt_readmore($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> ... read more</a>';
}
add_filter('excerpt_more', 'customized_excerpt_readmore');

/* Custom functionality */
function renderPageBanner(){
    ?>
    <img id="pageBanner" src="<?php echo get_stylesheet_directory_uri()."/images/page-banner.jpg"; ?>" />
    <?php
}
/* End of - Custom functionality */

?>