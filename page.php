<?php get_header(); ?>
<div id="content" class="flex flex-row">
       <div id="primary" class="content-area w-full sm:w-3/4 md:w-3/4 p-6">
<?php
       if ( have_posts() ) : while ( have_posts() ) : the_post();

get_template_part( 'content-page', get_post_format() );

endwhile; endif;
?>

    </div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

