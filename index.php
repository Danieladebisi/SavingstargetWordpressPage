<?php get_header(); ?>

<div class="container">
    <div class="main-content">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
            endwhile;
            the_posts_navigation();
        else :
            get_template_part( 'content', 'none' );
        endif;
        ?>
    </div> <!-- End of .main-content -->
</div> <!-- End of .container -->

<?php get_footer(); ?>
