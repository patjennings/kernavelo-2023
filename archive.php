<?php
/*
  Template Name: Archives
*/
get_header(); ?>

    <div id="content" class="flex flex-row">
    <div id="primary" class="content-area w-full sm:w-3/4 md:w-3/4 p-6">

    <header class="post-header">
    <h2 class="post-title">Archives</h2>
    </header>
    <!-- https://stackoverflow.com/questions/25952213/wordpress-list-all-posts-by-year-with-pagination	 -->
<?php foreach(posts_by_year() as $year => $posts) : ?>
    <h2 class="title"><?php echo $year; ?></h2>

        <ul>
<?php foreach($posts as $post) : setup_postdata($post); ?>
        <li>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?> - <span class="small text-muted"><?php the_date(); ?></span></a>
            </li>
<?php endforeach; ?>
            </ul>
<?php endforeach; ?>
                </div><!-- #content -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>
