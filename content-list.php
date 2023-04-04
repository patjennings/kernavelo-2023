<a class="post block px-10 py-6 transition-all hover:bg-orange-200" href="<?php echo esc_url( get_permalink() ); ?>">
    <div class="row">
        <header class="mb-4">
            <h1 class="text-2xl font-bold mb-2"><?php the_title(); ?></h1>
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
