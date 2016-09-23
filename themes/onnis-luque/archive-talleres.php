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
					<a class="[ js-modal-opener ]" href="#" data-modal="taller" >
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

				<div class="[ modal-wrapper modal-taller ][ hide ]">
					<div class="[ modal ][ diagonal-green-to-blue-gradient ]">
						<div class="[ modal-content ][ wrapper ]">
							<div class="[ row ][ clearfix ][ padding--top ]">
								<div class="[ pull-right ][ hidden--large-inline ][ inline-block align-middle ]">
									<a class="[ block ][ pull-right ][ bg-transparent ][ js-modal-closer ]" data-modal="taller" href="#">
										<span class="[ block ][ no-padding ]">
											<img class="[ svg icon icon--medium ][ color-intermediate ][ padding--small ]" src="<?php echo THEMEPATH; ?>images/close.svg" alt="menu">
										</span>
									</a>
								</div>
							</div><!-- row -->
							<div class="[ row ]">
								<img class="image-responsive" src="<?php echo $image[0]; ?>" alt="">
							</div>
						</div><!-- modal-content -->
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section><!-- talleres -->


<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>
