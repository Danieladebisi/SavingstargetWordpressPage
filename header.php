<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="container">
        <a href="<?php echo home_url(); ?>" class="logo">SavingsTarget</a>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'container' => false, 'menu_class' => 'nav-menu')); ?>
        </nav>
    </div>
</header>
