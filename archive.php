<?php get_header(); ?>
<?php
$description = get_the_archive_description();
?>
<div id="content" class="flex flex-col laptop:flex-row bg-white">
    <?php if ( have_posts() ) : ?>
       <div id="primary" class="content-area w-full laptop:w-2/3 desktop:w-2/3">
       <header class="border-gray-100 border-b px-10 pt-8 pb-4">
       <span class="text-gray-400 text-sm">Catégorie</span>
<?php the_archive_title( '<h1 class="page-title text-xl text-gray-900 mb-0">', '</h1>' ); ?>
		            <?php if ( $description ) : ?>
			              <div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
		            <?php endif; ?>
            </header>
            <div>
	              <?php while ( have_posts() ) : ?>
		                <?php the_post(); ?>
		                <?php get_template_part( 'content-list', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
	              <?php endwhile; ?>
<?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>

    <?php else : ?>
	              <?php get_template_part( 'content-list' ); ?>
    <?php endif; ?>
            </div> <!-- test 1 -->
        </div> <!-- test 2 -->

        <?php get_sidebar(); ?>
        <?php get_footer(); ?>
