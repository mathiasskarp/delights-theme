<?php
declare(strict_types=1);

function delights_enqueue_assets() {
    
    // Ladda in Tailwind CSS via CDN genom att enqueua Tailwind-scriptet.
    wp_enqueue_script( 'tailwind-js', 'https://cdn.tailwindcss.com', array(), null, false );

    // Laddar in tematets huvudsakliga stylesheet (för egna anpassningar)
    wp_enqueue_style( 'delights-style', get_stylesheet_uri() );

    // Ladda in eget JavaScript
    wp_enqueue_script( 'delights-script', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'delights_enqueue_assets' );

// Registrera menyval i header
function delights_register_menus() {
    register_nav_menus(array(
        'huvudmeny' => __('Huvudmeny', 'delights')
    ));
}
add_action('init', 'delights_register_menus');
?>