<div class="post">
    <div class="row">
	<div class="col-md-12">
	    <header class="post-header">
		<h2 class="post-title"><?php the_title(); ?></h2>
		<p class="post-meta"><?php the_date(); ?> par <i class="ico ico-medium i-user"></i><?php the_author(); ?></p>
	    </header>
	</div>
    </div>
    <div class="row">
	<div class="container">
	<div class="col-md-8 offset-md-2">
	    <div class="post-content">
		<?php the_content(); ?>
	    </div>
	</div>
	</div>
    </div>
</div>
