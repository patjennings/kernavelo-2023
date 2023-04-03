<div class="post">
    <div class="row">
        <header class="mb-6">
            <h1 class="text-3xl font-bold"><?php the_title(); ?></h1>
            <p class="post-meta text-gray-500"><?php the_date(); ?> par <?php the_author(); ?></p>
        </header>
    </div>
    <div class="row">
        <div class="container">
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
