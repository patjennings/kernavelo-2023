<?php get_header(); ?>
<div id="slider" class="w-full h-80 laptop:h-96 overflow-hidden relative">
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
            <li class="slide flex flex-col flex-wrap h-full w-full float-left laptop:flex-row">
                <div class="image w-full h-1/2 laptop:h-full laptop:w-2/3">
<?php the_post_thumbnail('post-thumbnail', ['class' => 'w-screen img-responsive responsive--full -top-[35%] relative ', 'title' => 'Feature image']); ?>
                </div>
                     <a class="cartel h-1/2 flex flex-col relative p-4 bg-blue-800 text-white block laptop:h-full laptop:p-8 laptop:w-1/3" href="<?php echo esc_url( get_permalink() ); ?>">
                    <h2 class="text-white text-xl mb-4 laptop:text-2xl desktop:text-3xl"><?php the_title(); ?></h2>
                    <p class="text-gray-300 text-base hidden laptop:block"><?php echo(get_the_excerpt()); ?></p>
                </a>
            </li>
        <?php
        }
        }
        ?>
</div>
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

