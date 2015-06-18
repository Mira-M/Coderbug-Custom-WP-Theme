<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package coderbug
 */
?>

</div><!-- #content -->
	<footer id="colophon" class="site-footer footer-columns" role="contentinfo">
		<div class="container footer-section">
			<div class="row">
				<div class="col-lg-4 col-md-4 footer-quote-wrap">
					<div class="footer-quote"><?php dynamic_sidebar( 'footer-1' ); ?></div>
				</div>
				<div class="col-lg-4 col-md-4 footer-quote-wrap">
					<div class="footer-quote"><?php dynamic_sidebar( 'footer-2' ); ?></div>
				</div>
				<div class="col-lg-4 col-md-4 footer-quote-wrap">
					<div class="footer-quote"><?php dynamic_sidebar( 'footer-3' ); ?></div>
				</div>
		</div><!-- .row -->
	</div><!-- .containr -->
			<div class="footerwrap">
			<div class="container">
				<div class="social-icons">
					<ul class="social-wrap">
					<?php $social_options = coderbug_option( 'social_icons' ); ?>
					<?php foreach ( $social_options as $key => $value ) {
						if ( $value ) { ?>
							<li> 
								<a href="<?php echo $value; ?>" title="<?php echo $key; ?>" target="_blank">
									<i class="fa fa-<?php echo $key; ?>"></i>
								</a> 
							</li>
						<?php }
					} ?>
					</ul> <!-- /social-wrap -->
				</div><!-- .social-icons -->

				<?php if (coderbug_option('custom_copyright') != '') { ?>
				<div class="copyright">
					<?php echo coderbug_option('custom_copyright'); ?>
				</div>
				<?php } ?>

			</div>
		</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>