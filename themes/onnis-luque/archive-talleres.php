<?php get_header(); ?>

<!-- =================================================
==== TALLERES
================================================== -->
<?php if( have_posts() ) : ?>
	<section class="[ talleres ]">
		<div class="[ wrapper ][ text-center ]">
			<h2 class="">Talleres</h2>
			<div class="row">
				<?php
				while ( have_posts() ) : the_post();
					$lugar_taller = get_post_meta($post->ID, '_lugar_taller_meta', true);
					$fecha_taller = get_post_meta($post->ID, '_fecha_taller_meta', true);
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				?>
					<div class="[ xmall-8 ][ margin-bottom ][ hero ][ center ]" style="background-image: url('<?php echo $image[0]; ?>');">
						<div class="[ color-light ][ padding ]">
							<h3 class="[ margin-bottom--large margin-top ]"><?php echo get_the_title(); ?></h3>
							<p><?php echo $lugar_taller; ?></p>
							<p><?php echo $fecha_taller; ?></p>
							<a href="<?php echo get_permalink(); ?>" class="[ button button--primary ][ pull-right ]">Mas información</a>
						</div>
						
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section><!-- talleres -->
<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>
