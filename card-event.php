<div class="convocation <?php if ($iterator == 0){ echo "convocation-first"; } ?>">
    <a href=<?php the_permalink(); ?>>
	<?php if ($iterator == 0){
	?>
	    <div class="convocation-last"><i class="ico ico-medium i-megaphone"></i>Dernière convocation</div>
	<?php 
	} ?>
	<h2 class="convocation-title"><?php the_title(); ?></h2>	
	<div class="convocation-excerpt"><?php the_content(); ?></div>
	<?php
	$league = get_the_terms( $post->ID, 'sp_league');
	echo $league[0]->name;
	?>
    </a>
</div>



