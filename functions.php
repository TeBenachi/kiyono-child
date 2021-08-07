<?php

    
function kiyonochild_enqueue_styles() {

    $ver  =   wp_get_theme( 'kiyonochild' )->get( 'Version' );

    wp_register_style( 
        'kiyonochild_google_fonts', 
        'https://fonts.googleapis.com/css2?family=Boogaloo&display=swap',
        [],
        $ver
    );
    wp_enqueue_style( 'kiyonochild_google_fonts' );

    $parenthandle = 'parent-style'; 
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  
        $ver
    );
}

add_action( 'wp_enqueue_scripts', 'kiyonochild_enqueue_styles' );


if ( ! function_exists( 'kiyonochild_setup_theme' ) ) {
    function kiyonochild_setup_theme() {
        add_theme_support( 'custom-line-height');
        add_theme_support( 'custom-spacing');
        add_theme_support( 'custom-units', 'rem', 'px' );
        add_theme_support('editor-color-palette');
        add_theme_support( 'responsive-embeds' );

    }
}
add_action( 'after_setup_theme', 'kiyonochild_setup_theme');