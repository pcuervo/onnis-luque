<?php
	get_header();
	the_post();
	$hero_full = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
	$hero_url = $hero_full[0];
	$lugar = get_lugar_proyecto( $post->ID );
	$autor = get_autor_proyecto( $post->ID );
	$ano = get_ano_proyecto( $post->ID );
?>

<section class="[ single ]">

	<!-- =================================================
	==== HERO
	================================================== -->
	<article class="[ hero hero-single-archivo ][ margin-bottom ]" style="background-image: url(<?php echo $hero_url; ?>)">
		<div class="[ opacity-gradient--bottom-top ][ z-index-2 ]"></div>
		<div class="wrapper">
			<div class="[ center-full ][ z-index-3 ][ xmall-12 ][ text-center color-light ]">
				<div class="[ wrapper ]">
					<h1 class="[ no-margin ]"><?php echo get_the_title(); ?></h1>
				</div>
			</div>
		</div>
	</article><!-- hero -->

	<div class="[ margin-bottom--large ][ single-content ]">
		<div class="[ wrapper ]">
			<div class="[ xmall-12 medium-10 large-8 center ][ text-center ]">
				<?php the_content(); ?>
			</div>
			<br />

			<?php
			$content = $post->post_content;

			if( has_shortcode( $content, 'gallery' ) ) {
				$galleries = get_galleries_from_content($post);
				foreach ($galleries as $gallery => $galleryIDs) {
					$images = sga_gallery_images('single_proyecto', $galleryIDs); ?>
					<section class="[ js-gallery ]">
						<?php foreach ($images as $key => $image) {
							$imageID 	= $image[4];
							$imageURL	= $image[0];
						?>
							<img class="[ js-gallery-item ]" data-number="<?php echo $key; ?>" src="<?php echo $imageURL; ?>">
						<?php } ?>
					</section><!-- row -->
				<?php }
			} ?>

		</div><!-- .wrapper -->
	</div>
</section>

<!-- =================================================
==== MODAL ARCHIVO
================================================== -->
<section class="[ modal-wrapper modal-archivo ][ hide ]">
	<div class="[ modal modal--full ]">
		<div class="[ xmall-12 ][ close-modal ][ clearfix ][ absolute z-index-6 ][ color-intermediate ]">
			<div class="[ row controls ]">
				<img class="[ span ][ text-left ][ padding ][ cycle-control cycle-prev ]" src="<?php echo THEMEPATH; ?>images/prev.png">
				<p class="[ span xmall-12 ][ text-center ][ no-margin ]">
					<a class="[ block ][ padding ][ bg-transparent ][ js-gallery-toggler ]" data-modal="contacto" href="#">
						Cerrar
					</a>
				</p>
				<img class="[ span ][ padding ][ cycle-control cycle-next ]" src="<?php echo THEMEPATH; ?>images/next.png">
			</div>
		</div>
		<div class="[ modal-content ][ wrapper ][ text-center ]">
			<div class="[ slideshow ]">
				<?php
				$images = sga_gallery_images('full', $galleryIDs);
				$totalImages = count($images);

				foreach ($images as $key => $image) {
					$imageURL 	= $image[0];
					?>

					<img class="[ image-single ]" src="<?php echo $imageURL; ?>">

				<?php } ?>
			</div><!-- slideshow -->
			<p class="[ text-center ][ no-margin ][ cycle-info ][ color-secondary ][ center-bottom ]"></p>
		</div>
	</div><!-- modal-content -->
</section>

<?php get_footer(); ?>