<aside class="sidebar">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php else : ?>
        <p>Add some widgets to the sidebar.</p>
    <?php endif; ?>
</aside>
