<?php
	get_header();
	the_post();
	$lugar_taller = get_post_meta($post->ID, '_lugar_taller_meta', true);
	$fecha_taller = get_post_meta($post->ID, '_fecha_taller_meta', true);
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
?>

<section class="[ single ]">

	<div class="[ margin-bottom--large ][ single-content ]">
		<div class="[ wrapper ]">
			<div class="[ xmall-12 medium-10 large-8 center ][ text-center ]">
				<?php the_content(); ?>
			</div>

			<div class="[ margin-bottom--large ]">
				<h3 class="[ margin-bottom ][ uppercase ]"><?php echo get_the_title(); ?></h3>
				<p><?php echo $lugar_taller; ?></p>
				<p><?php echo $fecha_taller; ?></p>
				<p></p>
				<div class="[ clearfix ]">
					<a href="<?php echo get_permalink(); ?>" class="[ button button--primary ][ no-margin ][ pull-right ]">Mas información</a>
				</div>
			</div>

		</div><!-- .wrapper -->
	</div>
</section>

<?php get_footer(); ?>