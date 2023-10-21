<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header">
        <div class="container">
            <div id="site-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                    } ?>
                </a>
            </div>
            <nav id="main-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_id' => 'menu',
                ));
                ?>
            </nav>
        </div>
    </header>
