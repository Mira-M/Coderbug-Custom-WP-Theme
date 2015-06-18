<?php
/**
 * File used for homepage static page content module
 *
 * @package WordPress
 */
?>
		<!-- ==== ABOUT ==== -->
	<div class="about-wrap">
		<div class="container wrap-section">
			<div class="row">
				<?php if(coderbug_option('homepage-about-title') != '') { ?>
				<h1 class="centered"> <?php echo coderbug_option('homepage-about-title'); ?> </h1>
				<?php } ?>
				<div class="col-lg-12">
					<?php if(coderbug_option('homepage-about') != '') { ?>
					<p><?php echo coderbug_option('homepage-about'); ?> </p>
					<?php } ?>
				</div><!-- col-lg-12-->
			</div><!-- row -->
		</div><!-- container -->
	</div> <!-- about-wrap -->
