<?php get_header(); ?>
<?php echo do_shortcode( '[smoothslider id="1"]' ); ?> 
<?php /*if( function_exists( "get_smooth_slider_recent" ) ){ get_smooth_slider_recent(); }*/ ?>
<div id="content" class="flex flex-col laptop:flex-row bg-white">
<div id="primary" class="content-area w-full laptop:w-2/3 desktop:w-2/3 p-10">

        <?php if ( have_posts() ) : ?>

            <?php
            // Start the loop.
            while ( have_posts() ) :
            the_post();

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that
             * will be used instead.
             */
            get_template_part( 'content-home', get_post_format() );

            // End the loop.
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination(
                array(
                    'prev_text'          => __( 'Previous page', 'twentysixteen' ),
                    'next_text'          => __( 'Next page', 'twentysixteen' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
                )
            );

            // If no content, include the "No posts found" template.
            else :
            get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

