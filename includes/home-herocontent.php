<?php
/**
 * File used for homepage hero content module
 *
 * @package WordPress
 */
?>

<?php $header_img = coderbug_option('homepage-banner-image', false, 'url');

$header_url = '';
if ($header_img != '') {
$header_url = "background-image: url('" . $header_img . "');";
 }?>

<!-- ==== HEADERWRAP ==== -->
<div class="headerwrap pagewrap" style="<?php echo $header_url; ?>">
	<header class="clearfix">
		<?php if(coderbug_option('hero-content-heading') != '') { ?>
		<h1> <?php echo coderbug_option('hero-content-heading'); ?> </h1>
		<?php } ?>

		<?php if(coderbug_option('hero-content-subheading') != '') { ?>
		<h3><?php echo coderbug_option('hero-content-subheading'); ?> </h3>
		<?php } ?>

		<?php 
			$btn_text = coderbug_option('featured_btn_text', '');
			$btn_size = 'btn-'.coderbug_option('featured_btn_size', '');
			$btn_color = 'btn-'.coderbug_option('featured_btn_color', '');
			$btn_url = coderbug_option('featured_btn_url', '');

			if (coderbug_option('featured_btn_block') == '1' ){
				$btn_block = "btn-block";
			}

			?>

			<?php if (coderbug_option('featured_btn') == '1' ){	?>	      
		    <p><a href="<?php echo $btn_url; ?>" target="_self" class="btn <?php echo $btn_color .' '. $btn_size .' '. $btn_block; ?>" role="button"><?php echo $btn_text; ?></a></p>
		    <?php } ?>
	</header>	    
</div><!-- /headerwrap -->

