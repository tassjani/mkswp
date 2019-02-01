<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package inkness
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}

if ( inkness_load_sidebar() ) : ?>
    <div id="secondary" class="widget-area <?php do_action('inkness_secondary-width') ?>" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div><!-- #secondary -->
<?php endif; ?>