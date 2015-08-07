<?php
/**
 * The template used for displaying portfolio items
 *
 * @package coderbug
 */
?>

<!-- PORTFOLIO IMAGE 1 -->
<div class="col-sm-6 col-md-4 item">
	<div class="grid grid-portfolio">
		<figure>
			<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive') ); ?>
		<figcaption>
			<h5><?php the_title(); ?></h5><a href="<?php the_permalink(); ?>" class="btn btn-success">Take a Look</a>
		</figcaption><!-- /figcaption -->
		</figure><!-- /figure -->
	</div><!-- /grid-mask -->
</div><!-- /col -->
