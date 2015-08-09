<?php
/**
 * The template used for displaying blog items
 *
 * @package coderbug
 */
?>

<?php
	
	$home_blog_title = the_title_attribute('echo=0');
	$blog_loop_value = strlen($home_blog_title);
?>


<!-- PORTFOLIO IMAGE 1 -->
<div class="col-sm-6 col-md-4 item">
    <div class="grid grid-blog">
		<figure>
			<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive') ); ?>	
		<figcaption>
			<?php
				if ($blog_loop_value > 45) {
					echo '<a href="';
					echo the_permalink() . '" <h5 id ="blog_title_overflow">' . get_the_title() . '</h5></a>';
				} else {
					echo '<a href="';
					echo the_permalink() . '" <h5>' . get_the_title() . '</h5></a>';
				}
			?>
		
		</figcaption><!-- /figcaption -->
		
		</figure><!-- /figure -->
	</div><!-- /grid-mask -->
</div><!-- /col -->

