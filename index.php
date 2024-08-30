<?php get_header(); ?>

<div class="container">
    <div class="main-content">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2 class="entry-title"><?php the_title(); ?></h2>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.', 'savingstarget'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
