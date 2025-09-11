<?php

/**
 * industrial_scripts description
 * @return [type] [description]
 */
function industrial_scripts() {

    /**
     * all css files
    */

    wp_enqueue_style( 'industrial-fonts', industrial_fonts_url(), array(), time() );
    if( is_rtl() ){
        wp_enqueue_style( 'bootstrap-rtl', INDUSTRIAL_THEME_CSS_DIR.'bootstrap.rtl.min.css', array() );
    }else{
        wp_enqueue_style( 'bootstrap', INDUSTRIAL_THEME_CSS_DIR.'bootstrap.min.css', array() );
    }
    wp_enqueue_style( 'meanmenu', INDUSTRIAL_THEME_CSS_DIR . 'meanmenu.css', [] );
    wp_enqueue_style( 'animate', INDUSTRIAL_THEME_CSS_DIR . 'animate.css', [] );
    wp_enqueue_style( 'owl-carousel', INDUSTRIAL_THEME_CSS_DIR . 'owl-carousel.css', [] );
    wp_enqueue_style( 'font-awesome-pro-industrial', INDUSTRIAL_THEME_CSS_DIR . 'font-awesome-pro-industrial.css', [] );
    wp_enqueue_style( 'jquery-fancybox', INDUSTRIAL_THEME_CSS_DIR . 'spacing.css', [] );
    wp_enqueue_style( 'industrial-core', INDUSTRIAL_THEME_CSS_DIR . 'industrial-core.css', [], );
    wp_enqueue_style( 'industrial-unit', INDUSTRIAL_THEME_CSS_DIR . 'industrial-unit.css', [], );
    wp_enqueue_style( 'industrial-custom', INDUSTRIAL_THEME_CSS_DIR . 'industrial-custom.css', [] );
    wp_enqueue_style( 'industrial-style', get_stylesheet_uri() );

    // all js
    wp_enqueue_script( 'bootstrap-bundle', INDUSTRIAL_THEME_JS_DIR . 'bootstrap-bundle.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'wow', INDUSTRIAL_THEME_JS_DIR . 'wow.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'waypoints', INDUSTRIAL_THEME_JS_DIR . 'waypoints.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'easing', INDUSTRIAL_THEME_JS_DIR . 'easing.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'counterup', INDUSTRIAL_THEME_JS_DIR . 'counterup.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'owl-carousel', INDUSTRIAL_THEME_JS_DIR . 'owl.carousel.min.js', [ 'jquery' ], false, true );

    wp_enqueue_script( 'meanmenu', INDUSTRIAL_THEME_JS_DIR . 'meanmenu.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'isotope-pkgd', INDUSTRIAL_THEME_JS_DIR . 'isotope-pkgd.js', [ 'imagesloaded' ], false, true );
    wp_enqueue_script( 'industrial-main', INDUSTRIAL_THEME_JS_DIR . 'main.js', [ 'jquery' ], false, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'industrial_scripts' );

/*
Register Fonts
 */
function industrial_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'industrial' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap';
    }
    return $font_url;
}