<?php
/**
 * File used for homepage hero post module
 *
 * @package WordPress
 */
?>

<?php 
			// the query
$the_query = new WP_Query( array('post_type' => 'portfolio',
                                'posts_per_page' => '6') ); ?>

<div class="container wrap-section portfolio-wrap">
	
	<div class="row">
		<?php if(coderbug_option('homepage-portfolio-title') != '') { ?>
		<h1 class="centered"> <?php echo coderbug_option('homepage-portfolio-title'); ?> </h1>
		<?php } else { ?>
			<h1 class="centered">WE CREATE COOL STUFF</h1>
		<?php } ?>
	</div><!-- /row -->

<?php if ( $the_query->have_posts() ) : ?>

	<div class="container">
		<div class="row">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'portfolio' ); ?>
			<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div><!-- /row -->
	</div><!-- /container -->
</div> <!-- /container wrap-section -->


