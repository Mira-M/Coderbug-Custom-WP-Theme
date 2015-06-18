<?php
/**
 * @package coderbug
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-content">
	<!-- Portfolio Details -->
	<div class="folio-wrapper">

		<div class="portfolio-featured">

		<!-- Wrapper for slides -->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">

			<?php $portfolio_img = rwmb_meta('coderbug_slider_image', 'type=image_advanced'); 
				$count = 0;
			?>

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<?php if (count($portfolio_img) > '0') {
				foreach ($portfolio_img as $img) {
					$item_url = "{$img['full_url']}";
					echo '<li data-target="#carousel-example-generic" data-slide-to="' . $count . '"></li>';
					$count++;
				}
			}
			?>
			</ol>

			<?php if (count($portfolio_img) > '0') {
				foreach ($portfolio_img as $img) {
					$item_url = "{$img['full_url']}";
					echo '<div class="item">';
					echo '<img src="' . $item_url . '" alt="">';
					echo '</div>';
				}
			}
			?>
		</div> <!-- Carousel Inner-->
	</div> <!-- Carousel -->
</div> <!-- portfolio-featured -->

		<div class="row folio-text-wrapper">
		<div class="col-lg-8">
			<h4> <?php the_title(); ?> </h4>
			<p><?php the_content() ?></p>
		</div> <!-- column -->

		<div class="col-lg-4">
			<?php if (rwmb_meta('coderbug_side_details') != '') {
				echo rwmb_meta('coderbug_side_details');
			} ?>
		</div> <!-- column -->
	</div> <!-- row -->
	</div> <!-- folio-wrapper -->

<?php if (coderbug_option('enable_disable_tags') == '1') { ?>
<p><?php the_tags(); ?></p>
<?php } ?>

<?php
wp_link_pages( array(
	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'coderbug' ),
	'after'  => '</div>',
	) );
	?>
</div><!-- .entry-content -->

</article><!-- #post-## -->
