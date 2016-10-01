<?php get_header(); ?>

<!-- =================================================
==== TALLERES
================================================== -->
<?php if( have_posts() ) : ?>
	<section class="[ talleres ][ margin-top ]">
		<div class="[ wrapper ]">
			<h2 class="[ text-thin ]">Noticias</h2>
			<div class="[ row ][ text-center ]">
				<?php
				while ( have_posts() ) : the_post();
					$lugar_taller = get_post_meta($post->ID, '_lugar_taller_meta', true);
					$fecha_taller = get_post_meta($post->ID, '_fecha_taller_meta', true);
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				?>
				<div class="[ column xmall-12 medium-6 ][ margin-bottom--large ]">
					<a class="[ js-modal-opener ]" href="#" data-modal="taller-<?php echo $post->ID; ?>" >
						<div class="[ image-responsive ][ margin-bottom ][ bg-cover ][ image-banner-taller ]" style="background-image: url('<?php echo $image[0]; ?>');"></div>
					</a>
					<h3 class="[ margin-bottom ][ uppercase ]"><?php echo get_the_title(); ?></h3>
					<p><?php echo $lugar_taller; ?></p>
					<p><?php echo $fecha_taller; ?></p>
					<br />
					<div class="[ clearfix ][ text-center ]">
						<a href="<?php echo get_permalink(); ?>" class="[ button button--primary ][ no-margin ]">Mas información</a>
					</div>
				</div>

				<section class="[ modal-wrapper modal-taller modal-taller-<?php echo $post->ID; ?> ][ hide ]">
					<div class="[ modal modal--full ]">
						<div class="[ xmall-12 ][ close-modal ][ clearfix ][ absolute z-index-6 ][ color-intermediate ]">
							<div class="[ row controls ]">
								<p class="[ span xmall-12 ][ text-center ][ no-margin ]">
									<a class="[ block ][ padding ][ bg-transparent ][ js-modal-toggler ]" data-modal="contacto" href="#">
										Cerrar
									</a>
								</p>
							</div>
						</div>
						<div class="[ modal-content ][ wrapper ][ text-center ]">
							<div class="[ slideshow ]">
								<img class="[ image-single ][ center-full ][ opacity-10 ]" src="<?php echo $image[0]; ?>" alt="">
							</div>
						</div>
					</div>
				</section>
				<?php endwhile; ?>
			</div>
		</div>
	</section><!-- talleres -->


<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>
