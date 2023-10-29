<?php

function theme_enqueue_styles() {
    // Add the following two lines //
    wp_enqueue_style( 'bootstrap-cdn-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' ,false, NULL, 'all' );
    wp_enqueue_script( 'bootstrap-js' , 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true );
    // Fade in Library
    wp_enqueue_style( 'AOS_Fade_css', 'https://unpkg.com/aos@2.3.1/dist/aos.css' ,false, NULL, 'all' );
    wp_enqueue_script( 'AOS_Fade_js', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
    
    // ------               -------//    
    wp_enqueue_style( 'Theme-style', get_template_directory_uri() . '/assets/css/styles.css',false, NULL, 'all' );
    wp_enqueue_script( 'Theme-script', get_template_directory_uri() . '/assets/js/javaScript.js',array('AOS_Fade_js','jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
