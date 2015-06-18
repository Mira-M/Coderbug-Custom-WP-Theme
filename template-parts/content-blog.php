<?php
/**
 * The template used for displaying blog items
 *
 * @package coderbug
 */
?>

<!-- PORTFOLIO IMAGE 1 -->
<div class="col-sm-6 col-md-4 item">
    <div class="grid">
		<figure>
			<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive') ); ?>
		<figcaption>
			<h5><?php echo substr(the_title($before = '', $after = '...', FALSE), 0, 25); ?></h5>
			<a href="<?php the_permalink(); ?>" class="btn btn-success">Read</a>
		</figcaption><!-- /figcaption -->
		</figure><!-- /figure -->
	</div><!-- /grid-mask -->
</div><!-- /col -->

