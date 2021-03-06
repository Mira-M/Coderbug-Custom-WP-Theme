<?php
/**
 * Template Name: Blog
 *
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

	<div id="primary" class="col-md-12 col-lg-12">
		<main id="main" class="site-main portfolio" role="main">

			<?php
			    $terms = get_terms("category");
			    $count = count($terms);
			    echo '<div id="filters" class="btn-group">';
			    echo '<button type="button" class="btn btn-success" data-filter="*">'. __('All', 'coderbug') .'</button>';
			        if ( $count > 0 )
			        {   
			            foreach ( $terms as $term ) {
			                $termname = strtolower($term->name);
			                $termname = str_replace(' ', '-', $termname);
			                echo '<button type="button" class="btn btn-success" data-filter=".'.$termname.'">'.$term->name.'</button>';
			            }
			        }
			    echo "</div>";
			?>

			<?php 
			// Portfolio columns variable from Theme Options
			$pcount = coderbug_option('portfolio_column', '3'); ?>

			<?php 
			// the query
			$the_query = new WP_Query( array('post_type' => 'post','posts_per_page' => '-1') ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<div class="row">
					<div id="portfolio-items">

					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					  <?php
		                $terms = get_the_terms( $post->ID, 'category' );
		                                     
		                if ( $terms && ! is_wp_error( $terms ) ) : 
		                    $links = array();
		 
		                    foreach ( $terms as $term ) 
		                    {
		                        $links[] = $term->name;
		                    }
		                    $links = str_replace(' ', '-', $links); 
		                    $tax = join( " ", $links );     
		                else :  
		                    $tax = '';  
		                endif;
		                ?>

					<div class="col-sm-6 col-md-<?php echo $pcount; ?> item <?php echo strtolower($tax); ?>">
						<div class="portfolio-item">
							<a class="thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail(array(600, 400)); ?>
							</a>
                            <div class ="blog_info">
							<h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
							<a id="blog_wrap" href="<?php the_permalink(); ?>" class="btn-sm btn-success">Read More</a>
                            </div>
						</div>
					</div>
					<?php endwhile; ?>
					<!-- end of the loop -->

				</div> <!-- #blog-items -->

				</div> <!-- .row -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			
		</main><!-- #main -->
	</div><!-- #primary -->

	</div><!-- .row -->
</div><!-- .container -->
<!-- ==== BLOG INFO ==== -->
	<div class="blog-wrap">
		<div class="container wrap-section">
			<div class="row">
				<?php if(coderbug_option('blog-title') != '') { ?>
				<h1 class="centered"> <?php echo coderbug_option('blog-title'); ?> </h1>
				<?php } ?>
				<div class="col-lg-12">
					<?php if(coderbug_option('blog-content') != '') { ?>
					<p><?php echo coderbug_option('blog-content'); ?> </p>
					<?php } ?>
				</div><!-- col-lg-12-->
			</div><!-- row -->
		</div><!-- container -->
	</div> <!-- blog-wrap -->
<?php get_footer(); ?>