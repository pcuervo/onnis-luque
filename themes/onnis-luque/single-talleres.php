<?php
	get_header();
	the_post();
	$lugar_taller = get_post_meta($post->ID, '_lugar_taller_meta', true);
	$fecha_taller = get_post_meta($post->ID, '_fecha_taller_meta', true);
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
?>

<section class="[ single ]">
	<div class="[ wrapper ][ text-center ]">
		<h1 class="[ no-margin ]"><?php echo get_the_title(); ?></h1>
		<h4 class="[ margin-bottom--large ]"><?php echo $lugar_taller . ' - ' . $fecha_taller ?></h4>
		<img class="[ margin-bottom ]" src="<?php echo $image[0]; ?>" alt="Cartel taller">
		<div class="[ xmall-12 medium-10 large-8 center ][ text-center ]">
			<?php the_content(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>