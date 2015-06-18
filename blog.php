<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package coderbug
 */

get_header(); ?>

<?php $bg_img = rwmb_meta('coderbug_banner_image', 'type=image_advanced');

$bg_url = '';

if (count($bg_img) > '0') {
	foreach ($bg_img as $img) {
		$bg = "{$img['full_url']}";
		$bg_url = "background-image: url('" . $bg . "');";
	}
}
?>
<div class="pagewrap" style="<?php echo $bg_url; ?>">
	<header>
		<?php if (rwmb_meta('coderbug_banner_text') != '') {
			echo '<h1>';
			echo rwmb_meta('coderbug_banner_text');
			echo '</h1>';
		} else { 
			the_title( '<h1 class="entry-title">', '</h1>' );
		}?>
	</header>	    
</div><!-- /headerwrap -->

<div class="container">
	<div class="row">

		<div id="primary" class="col-lg-12">
			<main id="main" class="site-main" role="main">

				<?php 
			// the query
				$the_query = new WP_Query( array('post_type' => 'posts') ); ?>

				<?php if ( $the_query->have_posts() ) : ?>

				<div class="row">
					<div class="portfolio-items">
						

						<!-- the loop -->
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

						<div class="item <?php echo strtolower($tax); ?>">
							<?php get_template_part( 'template-parts/content', 'blog' ); ?>
						</div>


					<?php endwhile; ?>
					<!-- end of the loop -->

				</div> <!-- #portfolio-items -->

			</div> <!-- .row -->


			<?php wp_reset_postdata(); ?>

		<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

</main><!-- #main -->
</div><!-- #primary -->

</div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>
