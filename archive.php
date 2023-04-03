<?php
/*
   Template Name: Archives
 */
get_header(); ?>
<div id="main-content" class="container-fluid">
    <div class="row">
	<div class="col-sm-12">
	    <div class="page">
		<div class="row">
		    <div class="col-md-12">
			<header class="post-header">
			    <h2 class="post-title">Archives</h2>
			</header>
		    </div>
		</div>
		<div class="container">
		    <div class="row">
			<div class="content col-sm-7" role="main">
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
			<div class="results col-sm-5" role="main">
			    <h2 class="title">Toutes les saisons</h2>
			    <?php global $wp_query;
			    $post_id = $wp_query->post->ID;?>
			    <ul>
    				<?php foreach(results_pages($post_id) as $page) : ?>
				    <li>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				    </li>
				<?php endforeach; ?>
			    </ul>
			</div><!-- #content -->
		    </div>
		</div>
	    </div>
	</div>
    </div>

</div><!-- #container -->







<?php get_sidebar(); ?>
<?php get_footer(); ?>
