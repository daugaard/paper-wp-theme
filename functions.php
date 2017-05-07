<?php
/**
 * Renomme functions and definitions
 *
 * @package Renomme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 700; /* pixels */

if ( ! function_exists( 'renommeio_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function renommeio_setup() {

	add_theme_support('post-thumbnails');

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'renomme' )
	) );


}
add_action( 'after_setup_theme', 'renommeio_setup' );

endif; // renommeio_setup
function renommeio_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'renommeio' ),
        'id'            => 'primary',
        'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget'  => '</div>',
				'before_title'  => '<p class="widget-header">',
        'after_title'   => '</p>',
    ) );

		register_sidebar( array(
				'name'          => __( 'Footer Left', 'renommeio' ),
				'id'            => 'footer-left',
				'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<p class="widget-header">',
				'after_title'   => '</p>',
		) );

		register_sidebar( array(
				'name'          => __( 'Footer Right', 'renommeio' ),
				'id'            => 'footer-right',
				'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<p class="widget-header">',
				'after_title'   => '</p>',
		) );

}
add_action( 'widgets_init', 'renommeio_widgets_init' );

?>
