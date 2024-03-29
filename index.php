<!-- ce template sert d'affichage aux posts !-->
<?php get_header(); ?>
<div id="content" class="flex flex-col w-full laptop:flex-row bg-white p-6">
    <div id="primary" class="content-area w-full laptop:w-2/3 desktop:w-2/3">
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();

        get_template_part( 'content-list', get_post_format() );

        endwhile; endif;
        ?>
</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
