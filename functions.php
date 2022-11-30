<?php

function nadav_theme_support() {
add_theme_support('title-tag');
add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'nadav_theme_support');



function nadav_menus() {

    $locations = array(
        'primary' => 'Desktop menu sidebar',
        'footer' => 'footer menu'

    );

    register_nav_menus($locations);

}

add_action('init','nadav_menus');



function nadav_register_styles() {

    $version = wp_get_theme() ->get('Version');
    wp_enqueue_style('nadav-stylesheet', get_template_directory_uri() . "/style.css", array('nadav-bootstrap'), $version, 'all');
    wp_enqueue_style('nadav-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('nadav-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'nadav_register_styles');


function nadav_register_scripts() {

    wp_enqueue_script('nadav-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.1.1', true);
    wp_enqueue_script('nadav-bootstrap-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '3.1.1', true );
    wp_enqueue_script('nadav-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '3.1.1', true );
    wp_enqueue_script('nadav-js', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true );


}

add_action('wp_enqueue_scripts', 'nadav_register_scripts');

?>
