<?php if (has_category()) {
?>
    <?php
    $catID = get_the_category();
    foreach($catID as $cat){

    ?>
	<div class="hero-content <?php echo $cat->slug; ?>">
    <?php
    }
    }
    ?>

    <a href=<?php the_permalink(); ?> class="container-fluid">
	<div class="row">
	    <div class="col-sm-6 offset-sm-3">
		<div class="post-notification"><i class="ico ico-medium i-file-o"></i>Dernier résumé</div>
		<h2 class="post-title"><?php the_title(); ?></h2>
		<p class="post-meta"><?php the_date(); ?> par <?php the_author(); ?></p>
		<div class="post-excerpt"><?php the_content(); ?></div>
	    </div>
	</div>
    </a>
</div>



