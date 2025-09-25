<?php
function test_enqueue_styles()
{
    wp_enqueue_style('test-style', get_stylesheet_uri());
    wp_enqueue_style('test-main', get_template_directory_uri() . './styles/main.css', array('test-style'));
    wp_enqueue_style('test-header', get_template_directory_uri() . './styles/header.css', array('test-style'));
    wp_enqueue_style('test-footer', get_template_directory_uri() . './styles/footer.css', array('test-style'));
}
add_action('wp_enqueue_scripts', 'test_enqueue_styles');

require get_template_directory() . '/inc/acf-fields.php';
