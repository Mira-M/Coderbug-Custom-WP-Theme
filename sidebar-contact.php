<?php
/**
 * The sidebar containing the contact sidebar widget area.
 *
 * @package coderbug
 */

if ( ! is_active_sidebar( 'contact' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-md-5 col-lg-5 contact-widget" role="complementary">
	<div>
		<?php dynamic_sidebar( 'contact' ); ?>
	</div>
</div><!-- #secondary -->

</div> <!-- .row -->
</div> <!-- .container -->