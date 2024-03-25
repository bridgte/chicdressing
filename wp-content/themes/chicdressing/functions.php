<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );


//Fonction pour décharger les polices Google du thème parent
function dequeue_parent_theme_fonts()
{
    wp_dequeue_style('kalam');
    wp_dequeue_style('opensans');
    wp_dequeue_style('playfair');
    wp_enqueue_style('rokkitt');
}
add_action('wp_enqueue_scripts',
'dequeue_parent_theme_fonts', 9999);

 