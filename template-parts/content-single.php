<?php
/**
 * @package coderbug
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php if (coderbug_option('disable_meta') =='1') { ?>
		<div class="entry-meta">
			<?php coderbug_posted_on(); ?>

			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'coderbug' ) );
			if ( $categories_list && coderbug_categorized_blog() ) :
				?>
			<span class="cat-links">
				<?php printf( __( '<i class="fa fa-folder-o"></i> %1$s', 'coderbug' ), $categories_list ); ?>
			</span>
		<?php endif; // End if categories ?>
	<?php endif; // End if 'post' == get_post_type() ?>

	<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
	<span class="comments-link"><i class="fa fa-comment-o"></i> <?php comments_popup_link( __( 'Leave a comment', 'coderbug' ), __( '1 Comment', 'coderbug' ), __( '% Comments', 'coderbug' ) ); ?></span>
<?php endif; ?>
</div><!-- .entry-meta -->
<?php } ?>
</header><!-- .entry-header -->

<div class="entry-content">
	<?php the_content(); ?>
	<?php
		// Display author bio if post isn't password protected
	if ( ! post_password_required() ) : ?>
	
	<?php if ( get_the_author_meta('description') != '' ) : ?>       
	<div class="author-meta well well-lg">
		<div class="media">
			<div class="media-object pull-left">
				<?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_meta( 'ID' ), 80 ); }?>
			</div>
			<div class="media-body">
				<h5 class="media-heading"><?php the_author_posts_link(); ?></h5>
				<p><?php the_author_meta('description') ?></p>
				<?php
						// Retrieve a custom field value
				$twitterHandle = get_the_author_meta('twitter'); 
				$fbHandle = get_the_author_meta('facebook');
				$gHandle = get_the_author_meta('gplus');
				?>
				<p> 
					<?php if ( get_the_author_meta('twitter') != '' ) : ?>
					<a href="http://twitter.com/<?php echo $twitterHandle; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
				<?php endif; // no twitter handle ?>

				<?php if ( get_the_author_meta('facebook') != '' ) : ?>
				<a href="<?php echo $fbHandle; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
			<?php endif; // no facebook url ?>

			<?php if ( get_the_author_meta('gplus') != '' ) : ?>
			<a href="<?php echo $gHandle; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
		<?php endif; // no google+ url ?>
	</p>
</div>
</div>
</div><!-- end of #author-meta -->
<?php endif; // no description, no author's meta ?>

<?php
		//end password protection check 
endif; ?>

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
