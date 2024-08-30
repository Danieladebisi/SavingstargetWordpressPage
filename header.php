<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container">
        <div class="logo">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <?php endif; ?>
        </div>
        <nav class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'nav-menu',
            ) );
            ?>
        </nav>
        <div class="header-widgets">
            <?php if ( is_active_sidebar( 'header-widgets' ) ) : ?>
                <?php dynamic_sidebar( 'header-widgets' ); ?>
            <?php endif; ?>
        </div>
    </div>
</header>
