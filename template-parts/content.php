<?php
/**
 * @package coderbug
 */
?>
<div class="col-sm-6 col-md-4">
	<div class="grid mask">
		<figure>
			
			<?php 
				$content = get_the_content('',false,false );
				echo $content;
			?>
			<?php 
				$pages = wp_link_pages( array());
			?>
		<figcaption>
			<h5><?php the_title(); ?></h5> <br>
				<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg">Take a Look</a>
		<figcaption>
		</figure>
	</div>
</div>