<?php

add_action( 'wp_enqueue_scripts', function() { 
    
    wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/css/main.min.css' ); 
    wp_enqueue_style( 'Merriweather',  'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap' ); 
    wp_enqueue_style( 'Montserrat',  'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap' ); 
    wp_enqueue_style( 'slick-carousel', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' ); 

    wp_enqueue_script( 'js' , get_template_directory_uri() . '/dist/js/main.min.js', array('jquery'), false, true); 
    wp_enqueue_script( 'slick-slider' , '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), false, true); 
    
}); 
    
add_theme_support('post-thumbnails'); 
add_theme_support('title-tag'); 
add_theme_support('custom-logo'); 

add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
	$existing_mimes['svg'] = 'image/svg+xml';
	return $existing_mimes;
}
function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
 }
 add_action('admin_head', 'fix_svg');