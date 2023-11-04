<?php
// Função para carregar os estilos e scripts do tema
function load_theme_styles_and_scripts() {
    // Carrega o arquivo CSS do tema
    wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.css', [], '1.0', false);
    wp_enqueue_style('slick', get_template_directory_uri().'/assets/css/slick.css', [], '1.0', false);
    wp_enqueue_style('slick-theme', get_template_directory_uri().'/assets/css/slick-theme.css', [], '1.0', false);
    wp_enqueue_style('reset', get_template_directory_uri().'/assets/css/reset.css', [], '1.0', false);
    wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', [], '1.0', false);

    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/script.js', [], '1.0', true);
    wp_enqueue_script('theme-slick', get_template_directory_uri() . '/assets/js/slick.min.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'load_theme_styles_and_scripts');

// Registra um menu de navegação
function register_theme_menu() {
    register_nav_menu('primary', __('Menu Principal'));
}
add_action('init', 'register_theme_menu');

// Suporte a widgets
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Barra Lateral',
        'id' => 'sidebar',
        'description' => 'Esta é a barra lateral do tema.',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}

// Suporte a logotipo personalizado
function theme_setup() {
    add_theme_support('custom-logo', array(
        'height' => 60,
        'width' => 200,
        'flex-height' => true,
    ));
}
add_action('after_setup_theme', 'theme_setup');

add_theme_support('post-thumbnails');


require('admin/custom-project/custom-post-project.php');
require('admin/custom-services/custom-post-service.php');
require('admin/fields-contato.php');
require('admin/fields-footer.php');
require('admin/fields-header.php');