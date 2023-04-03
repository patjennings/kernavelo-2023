<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<aside id="secondary" class="sidebar widget-area w-full sm:w-4/4 md:w-1/4 p-6 bg-orange-200" role="complementary">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
