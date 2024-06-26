<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="over_body"></div>

    <header class="header">

        <div class="container d-flex container_header">
            <div class="left_header d-flex">
                <div class="logo logo_header">
                        <?php if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        } ?>
                </div>

                <nav id="main-menu" class="menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_id' => 'menu',
                    ));
                    ?>
                </nav>
            </div>
            
            <div class="right_header d-flex">
                <?php 
                    $tel = get_theme_mod('link_botao');
                    if($tel):
                ?>
                <a href="tel:<?= $tel ?>"><?= $tel ?></a>
                <?php endif; ?>
            </div>
            
            <div class="btn_menu">
                <div class="row_menu"></div>
                <div class="row_menu"></div>
            </div>

        </div>

    </header>
