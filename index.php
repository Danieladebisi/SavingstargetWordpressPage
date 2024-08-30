<?php get_header(); ?>

<div class="content-area">
    <div class="main-content">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="blog-post">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </div>
    
    <div class="sidebar-content">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
