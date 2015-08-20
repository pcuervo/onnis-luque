<?php get_header(); ?>

<!-- =================================================
==== EDITORIAL
================================================== -->
<?php if( have_posts() ) : ?>
	<section class="[ editorial ]">
		<div class="[ wrapper ]">
			<h2>Editorial</h2>
			<div class="row">
				<?php
				while ( have_posts() ) : the_post();
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				?>
					<div class="[ column xmall-6 medium-4 large-3 ][ margin-bottom ]">
						<img class="[ image-responsive ]" src="<?php echo $image[0] ?>">
					</div>
					<div class="[ hidden ]">
						<h3><?php echo get_the_title(); ?></h3>
						<p><?php echo get_the_content(); ?></p>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section><!-- editorial -->
<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>
