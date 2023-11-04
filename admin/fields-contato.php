<?php

function theme_customize_register_whatsapp($wp_customize) {

    $wp_customize->add_section('contact_whatsapp', array(
        'title' => 'Link flutuante',
        'priority' => 30,
    ));

    $wp_customize->add_setting('contato_whatsapp', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contato_whatsapp', array(
        'label' => '',
        'section' => 'contact_whatsapp',
        'input_attrs' => [
            'placeholder' => __('5511987906556 (sem espaço)')
        ],
        'type' => 'text',
    ));

    $wp_customize->add_setting('text_float_btn', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('text_float_btn', array(
        'label' => '',
        'section' => 'contact_whatsapp',
        'input_attrs' => [
            'placeholder' => __('Nome do botão flutuante')
        ],
        'type' => 'text',
    ));

    
}

add_action('customize_register', 'theme_customize_register_whatsapp');

