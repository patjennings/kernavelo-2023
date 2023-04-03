<!-- ce template sert d'affichage aux posts !-->
<?php get_header(); ?>
<div class="row">
    <div class="col-sm-8 content-main">
	<?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
	endwhile; endif;
	?>	
    </div>
</div>
<?php get_footer(); ?>
