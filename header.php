<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package coderbug
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php if (coderbug_option('custom_favicon') != '') : ?>
	<link rel="icon" type="image/png" href="<?php echo coderbug_option('custom_favicon', false, 'url'); ?>" />
<?php endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">

	<nav role="navigation" id="navbar-main">
		<div class="navbar <?php if(coderbug_option('disable_fixed_navbar') =='1') { echo "navbar-fixed-top"; } else {echo "navbar-static-top";} ?> <?php if(coderbug_option('disable_inverse_navbar') == '1') { echo "navbar-inverse"; } else {echo "navbar-default";} ?> ">
			<div class="container">
				<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
					<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<?php $logo = coderbug_option('custom_logo', false, 'url'); ?>
					<?php if($logo !== '') { ?>
						<a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><img src="<?php echo $logo ?>" alt="<?php bloginfo( 'name' ) ?>"></a>
					<?php } else { ?>
						<a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-gamepad fa-stack-1x"></i> </span><?php bloginfo( 'name' ) ?></a>
					<?php } ?>
				</div>

				<div class="navbar-collapse collapse navbar-responsive-collapse">
					<?php
					$args = array(
						'theme_location' => 'primary',
						'depth'      => 2,
						'container'  => false,
						'menu_class'     => 'nav navbar-nav navbar-right',
						'walker'     => new Bootstrap_Walker_Nav_Menu()
						);

					if (has_nav_menu('primary')) {
						wp_nav_menu($args);
					} ?>
				</div>
			</div>
		</div>           
	</nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">