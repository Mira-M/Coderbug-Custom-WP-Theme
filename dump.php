
<?php
/**
 * @package coderbug
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php

		echo coderbug_option("test_text");

		?>
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if (coderbug_option('disable_meta') =='1') { ?>
		<?php if ( 'post' == get_post_type() ) : ?>
		
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
		<?php endif; ?>
		<?php } ?>
</header><!-- .entry-header -->

<div class="entry-content">
	<?php if ( has_post_thumbnail() ) : ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<?php the_post_thumbnail(); ?>
	</a>
<?php endif; ?>
<?php
/* translators: %s: Name of current post */
the_content( sprintf(
	wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'coderbug' ), array( 'span' => array( 'class' => array() ) ) ),
	the_title( '<span class="screen-reader-text">"', '"</span>', false )
	) );
	?>

	<?php
	wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'coderbug' ),
		'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->


<!-- 	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'coderbug' ), '<span class="edit-link">', '</span>' ); ?>
	</footer> -->
</article><!-- #post-## -->