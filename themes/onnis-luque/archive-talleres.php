<?php get_header(); ?>

<!-- =================================================
==== TALLERES
================================================== -->
<?php if( have_posts() ) : ?>
	<section class="[ talleres ][ margin-top ]">
		<div class="[ wrapper ]">
			<h2 class="[ text-thin ]">Talleres</h2>
			<div class="[ row ][ text-center ]">
				<?php
				while ( have_posts() ) : the_post();
					$lugar_taller = get_post_meta($post->ID, '_lugar_taller_meta', true);
					$fecha_taller = get_post_meta($post->ID, '_fecha_taller_meta', true);
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				?>
					<div class="[ xmall-12 ][ margin-bottom ][ relative ][ bg-cover ]" style="background-image: url('<?php echo $image[0]; ?>');">
						<div class="[ color-light ][ padding ]">
							<h3 class="[ margin-bottom--large margin-top ][ uppercase ]"><?php echo get_the_title(); ?></h3>
							<p><?php echo $lugar_taller; ?></p>
							<p class="[ margin-bottom ]"><?php echo $fecha_taller; ?></p>
							<p></p>
							<!-- <div class="[ clearfix ]">
								<a href="<?php echo get_permalink(); ?>" class="[ button button--primary ][ no-margin ][ pull-right ]">Mas información</a>
							</div> -->
						</div>

					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section><!-- talleres -->
<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>
