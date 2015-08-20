<?php get_header(); ?>

<!-- =================================================
==== HERO
================================================== -->
<section class="[ hero hero-home ]">
	<div class="[ padding-top-bottom--large ][ relative z-index-2 ]">
		<div class="[ text-center ]">
			<div class="[ bg-image-placeholder__wrapper bg-image-placeholder__wrapper__logo ][ margin-bottom--large ][ hidden--xlarge-inline ]">
				<a class="[ bg-image-placeholder bg-image-placeholder__logo ]" href="#"></a>
			</div>
			<a href="<?php echo site_url( 'proyectos' ); ?>" class="[ button button--primary button--hollow ]">Ver proyectos</a>
			<a href="<?php echo site_url( 'contacto' ); ?>" class="[ button button--primary button--hollow ]">Contáctame</a>
		</div>
	</div>
</section><!-- hero -->

<!-- =================================================
==== TESTIMONIALS
================================================== -->
<?php
$archivo_args = array(
	'post_type' => 'archivo',
	'posts_per_page' => 6,
);
$archivo_query = new WP_Query( $archivo_args );
if( $archivo_query->have_posts() ) : ?>
	<section class="[ archivo ]">
		<div class="[ wrapper ]">
			<h2 class="text-center">Proyectos <strong>Recientes</strong></h2>
			<div class="row">
				<?php
				while ( $archivo_query->have_posts() ) : $archivo_query->the_post();
					$lugar = get_lugar_proyecto( $post->ID );
					$ano = get_ano_proyecto( $post->ID );
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				?>
					<div class="[ column xmall-12 medium-6 ][ hero ]" style="background-image: url('<?php echo $image[0]; ?>');">
						<div class="[ color-light ][ padding ]">
							<h3><?php echo get_the_title(); ?></h3>
							<p><?php echo $lugar . '. ' . $ano; ?></p>
						</div>
					</div>
				<?php endwhile; ?>
				<div class="[ column xmall-12 ][ text-center ]">
					<a href="<?php echo site_url( 'contacto' ); ?>" class="[ button button--primary ]">Contáctame</a>
				</div>
			</div>
		</div>
	</section><!-- archivo -->
<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>