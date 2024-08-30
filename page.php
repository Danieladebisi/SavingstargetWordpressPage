<?php get_header(); ?>

<div class="content-area">
    <div class="main-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="page-content">
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            </div>
        <?php endwhile; endif; ?>
    </div>
    
    <div class="sidebar-content">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
