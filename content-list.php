<a class="post block mb-6" href="<?php echo esc_url( get_permalink() ); ?>">
    <div class="row">
        <header class="mb-2">
            <h1 class="text-2xl font-bold"><?php the_title(); ?></h1>
            <p class="post-meta text-gray-400 mb-0"><?php the_date(); ?> par <?php the_author(); ?></p>
        </header>
    </div>
    <div class="row">
        <div class="container">
            <div class="post-content">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
</a>
