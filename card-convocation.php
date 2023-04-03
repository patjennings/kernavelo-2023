<div class="convocation <?php if ($iterator == 0){ echo "convocation-first"; } ?>">
    <a href=<?php the_permalink(); ?>>
	<?php if ($iterator == 0){
	?>
	    <div class="convocation-last"><i class="ico ico-medium i-megaphone"></i>Dernière convocation</div>
	    <?php 
	    } ?>
	<h2 class="convocation-title"><?php the_title(); ?></h2>
	<div class="convocation-meta">
	    <?php if (has_category()) {
	    ?>
		<?php
		$catID = get_the_category();

		?>
		<span class="<?php echo $catID[0]->slug; ?> convocation-taxonomy"><?php echo $catID[0]->name; ?></span>
	    <?php 
	    }
	    ?>
	</div>
	<div class="convocation-excerpt"><?php the_content(); ?></div>
	
    </a>
</div>



