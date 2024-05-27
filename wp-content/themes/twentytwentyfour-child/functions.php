<?php
function twentytwentyfour_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'twentytwentyfour_child_enqueue_styles');
function display_custom_header() {
    // Отримайте заголовок з головної сторінки або вкажіть свій власний заголовок
    $header_title = get_the_title( get_option('page_on_front') ); // Заголовок головної сторінки
    return '<h1>' . $header_title . '</h1>';
}
add_shortcode('custom_header', 'display_custom_header');
