<?php

function theme_enqueue_styles() {
    // Add the following two lines //
    wp_enqueue_style( 'bootstrap-cdn-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' ,false, NULL, 'all' );

    
    // ------               -------//    
    wp_enqueue_style( 'Theme-style', get_template_directory_uri() . '/assets/css/styles.css',false, NULL, 'all' );
    wp_enqueue_script( 'Theme-script', get_template_directory_uri() . '/assets/js/javaScript.js',array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
