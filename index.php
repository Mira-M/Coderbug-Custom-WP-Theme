<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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

				<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>

				<div class="row">
					<div class="portfolio-items">
						<?php while ( have_posts() ) : the_post(); ?>

						<div class="item <?php echo strtolower($tax); ?>">

							<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( '/template-parts/content', get_post_format('post') );
					?>

				</div>

			<?php endwhile; ?>
		</div> <!-- #portfolio-items -->

	</div> <!-- .row -->


<?php else : ?>

	<?php get_template_part( '/template-parts/content', 'none' ); ?>

<?php endif; ?>

</main><!-- #main -->
</div><!-- #primary -->

</div>
</div>
<?php get_footer(); ?>