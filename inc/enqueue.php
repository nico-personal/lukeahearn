<?php

/**
* Theme Enqueue
*
* Learn more: https://developer.wordpress.org/reference/functions/wp_enqueue_script/
*
* @since   1.0.0
* @package starter
*/

/**
 *
 * Scripts: Frontend with no conditions, Add Custom Scripts to wp_head
 *
 * @since  1.0.0
 *
 */
function themezero_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-migrate');
        wp_enqueue_script('bootstrap',  get_template_directory_uri() . '/assets/jquery.themepunch.revolution.min.js', array('jquery'), false, false);
        wp_enqueue_script('popper',  get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), false, true);
        wp_enqueue_script('bootstrap',  get_template_directory_uri() . '/assets/bootstrap.min.js', array('jquery'), false, true);
        wp_enqueue_script('appear',  get_template_directory_uri() . '/assets/jquery.appear.js', array('jquery'), false, true);
        wp_enqueue_script('superfish',  get_template_directory_uri() . '/assets/superfish.js', array('jquery'), false, true);
        wp_enqueue_script('jquer-easing',  get_template_directory_uri() . '/assets/jquery.easing.1.3.js', array('jquery'), false, true);
        wp_enqueue_script('ui.totop',  get_template_directory_uri() . '/assets/jquery.ui.totop.js', array('jquery'), false, true);
        wp_enqueue_script('localscroll',  get_template_directory_uri() . '/assets/jquery.localscroll.min.js', array('jquery'), false, true);
        wp_enqueue_script('scrollTo',  get_template_directory_uri() . '/assets/jquery.scrollTo.min.js', array('jquery'), false, true);
        wp_enqueue_script('scrollbar',  get_template_directory_uri() . '/assets/jquery.scrollbar.min.js', array('jquery'), false, true);
        wp_enqueue_script('parallax-1.1.3',  get_template_directory_uri() . '/assets/jquery.parallax-1.1.3.js', array('jquery'), false, true);
        wp_enqueue_script('easypiechart.min',  get_template_directory_uri() . '/assets/jquery.easypiechart.min.js', array('jquery'), false, true);
        wp_enqueue_script('bootstrap-progressbar',  get_template_directory_uri() . '/assets/bootstrap-progressbar.min.js', array('jquery'), false, true);
        wp_enqueue_script('countTo',  get_template_directory_uri() . '/assets/jquery.countTo.js', array('jquery'), false, true);
        wp_enqueue_script('prettyPhoto',  get_template_directory_uri() . '/assets/jquery.prettyPhoto.js', array('jquery'), false, true);
        wp_enqueue_script('countdown',  get_template_directory_uri() . '/assets/jquery.countdown.min.js', array('jquery'), false, true);
        wp_enqueue_script('isotope',  get_template_directory_uri() . '/assets/isotope.pkgd.min.js', array('jquery'), false, true);
        wp_enqueue_script('carousel',  get_template_directory_uri() . '/assets/owl.carousel.min.js', array('jquery'), false, true);
        wp_enqueue_script('flexslider',  get_template_directory_uri() . '/assets/jquery.flexslider.min.js', array('jquery'), false, true);
        wp_enqueue_script('price-slider',  get_template_directory_uri() . '/assets/price-slider.min.js', array('jquery'), false, true);
        wp_enqueue_script('jquery.cookie',  get_template_directory_uri() . '/assets/jquery.cookie.js', array('jquery'), false, true);
        wp_enqueue_script('plugins',  get_template_directory_uri() . '/assets/plugins.js', array('jquery'), false, true);
        wp_enqueue_script('main',  get_template_directory_uri() . '/assets/main.js', array('jquery'), false, true);
        wp_enqueue_script('fancy-mouse',  get_template_directory_uri() . '/assets/jquery.mousewheel.pack.js', array('jquery'), false, true);
        // wp_enqueue_script('fancy-button',  get_template_directory_uri() . '/assets/jquery.fancybox-buttons.js', array('jquery'), false, true);
        // wp_enqueue_script('fancy-media',  get_template_directory_uri() . '/assets/jquery.fancybox-media.js', array('jquery'), false, true);
        // wp_enqueue_script('fancy-thumbs',  get_template_directory_uri() . '/assets/jquery.fancybox-thumbs.js', array('jquery'), false, true);
        wp_enqueue_script('fancy-box',  get_template_directory_uri() . '/assets/jquery.fancybox.pack.js', array('jquery'), false, true);

    } else {

       wp_enqueue_script('jquery');
    }

}

/**
 *
 * Styles: Frontend with no conditions, Add Custom styles to wp_head
 *
 * @since  1.0
 *
 */
function themezero_styles()
{

    /**
     *
     * Minified and Concatenated styles
     *
     */
     //wp_register_style('sero_style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');

    wp_enqueue_style('font-css', get_template_directory_uri() . '/assets/settings.css', array(), '1.0', 'all');
    wp_enqueue_style('font-css', get_template_directory_uri() . '/assets/fonts.css', array(), '1.0', 'all');
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900&#038;subset=latin-ext&#038;ver=1.2.0', array(), '1.0', 'all');
    wp_enqueue_style('accesspress', get_template_directory_uri() . '/assets/accesspress.css', array(), '1.0', 'all');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/style.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('animations-css', get_template_directory_uri() . '/assets/animations.css', array(), '1.0', 'all');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/main.css', array(), '1.0', 'all');
    // wp_enqueue_style('mainest-css', get_template_directory_uri() . '/assets/css/main.min.css', array(), '1.0', 'all');
    wp_enqueue_style('fancy-button-css', get_template_directory_uri() . '/assets/jquery.fancybox-buttons.css', array(), '1.0', 'all');
    wp_enqueue_style('fancy-thumbs-css', get_template_directory_uri() . '/assets/jquery.fancybox-thumbs.css', array(), '1.0', 'all');
    wp_enqueue_style('fancy-css', get_template_directory_uri() . '/assets/jquery.fancybox.css', array(), '1.0', 'all');

}

/**
 *
 * Styles: Comments
 *
 * @since  1.0
 *
 */
function themezero_enqueue_comments_reply() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

/**
 * Dequeue the jQuery UI styles.
 *
 * Hooked to the wp_print_styles action, with a late priority (100),
 * so that it is after the style was enqueued.
 */
function remove_unwanted_css() {


   if( is_front_page() || is_page_template('page-landingpage.php') ) {

       wp_dequeue_style( 'mp3-jplayer' );
       wp_deregister_style( 'mp3-jplayer' );

       wp_dequeue_style( 'wp-block-library' );
       wp_deregister_style('wp-block-library');

       wp_dequeue_style( 'fc-form-css' );
       wp_deregister_style('fc-form-css');

   }
}


add_action( 'wp_enqueue_scripts', 'remove_unwanted_css', 9999 );
add_action( 'wp_enqueue_scripts', 'themezero_scripts' );
add_action( 'wp_enqueue_scripts', 'themezero_styles' );
add_action( 'wp_enqueue_scripts', 'themezero_enqueue_comments_reply' );
