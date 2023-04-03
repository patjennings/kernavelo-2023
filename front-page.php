<?php get_header(); ?>
<div id="slider" class="w-full h-96 overflow-hidden">
    <ul id="slides-list" class="h-full transition-all duration-1000">
        <?php
        $args = array(
            'post_type' => 'post'
        );

        $post_query = new WP_Query($args);

        if($post_query->have_posts() ) {
            while($post_query->have_posts() ) {
                $post_query->the_post();
        ?>
            <li class="slide flex flex-wrap h-full w-full float-left">
                <div class="image w-2/3">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'w-screen img-responsive responsive--full', 'title' => 'Feature image']); ?>
                </div>
                <div class="cartel w-1/3 flex flex-col p-6 bg-blue-800 text-white">
                    <h2 class="text-white"><?php the_title(); ?></h2>
                    <p class="text-white"><?php the_excerpt(); ?></p>
                </div>
            </li>
        <?php
        }
        }
        ?>
</div>
<div id="content" class="flex flex-row">
<div id="primary" class="content-area w-full sm:w-3/4 md:w-3/4 p-6">

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

