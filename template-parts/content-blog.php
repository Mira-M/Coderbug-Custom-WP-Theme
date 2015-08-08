<?php
/**
 * The template used for displaying blog items
 *
 * @package coderbug
 */
?>


<!-- PORTFOLIO IMAGE 1 -->
<div class="col-sm-6 col-md-4 item">
    <div class="grid grid-blog">
		<figure>
			<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive') ); ?>	
		<figcaption>
			<a href="<?php the_permalink(); ?>" <h5><?php the_title(); ?></h5></a>
		</figcaption><!-- /figcaption -->
		
		</figure><!-- /figure -->
	</div><!-- /grid-mask -->
</div><!-- /col -->

