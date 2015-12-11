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
		<div class="[ center-full ][ z-index-3 ][ xmall-12 ][ text-center color-light ]">
			<div class="[ wrapper ]">
				<h1 class="[  ][ no-margin ]"><?php echo get_the_title(); ?></h1>
				<h2 class="[  ]"><small><?php echo $autor ?></small></h2>
			</div>
		</div>
		<div class="[ center-bottom ][ z-index-3 ][ xmall-12 ][ text-center color-light ]">
			<div class="[ wrapper ]">
				<p class="[  ]"><small><?php echo $lugar . '. ' . $ano ?></small></p>
			</div>
		</div>
	</article><!-- hero -->

	<div class="[ margin-bottom--large ][ single-content ]">
		<div class="[ wrapper ]">
			<div class="[ xmall-12 medium-10 large-8 center ][ text-center ]">
				<h3>Descripción</h3>
				<?php the_content(); ?>
			</div>

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
			<div class="[ row ]">
				<p class="[ span xmall-4 ][ text-left ][ padding no-margin ][ cycle-control cycle-prev ]"><</p>
				<p class="[ span xmall-4 ][ text-center ][ no-margin ]">
					<a class="[ block ][ padding ][ bg-transparent ][ js-gallery-toggler ]" data-modal="contacto" href="#">
						Cerrar
					</a>
				</p>
				<p class="[ span xmall-4 ][ text-right ][ padding no-margin ][ cycle-control cycle-next ]">></p>
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

					<div class="[ image-single ][ bg-light color-intermediate ]">
						<p class="[ text-center ][ no-margin ][ cycle-info ]"><?php echo $key+1; ?>/<?php echo $totalImages; ?></p>
						<img class="[ center block ]" src="<?php echo $imageURL; ?>">
					</div>

				<?php } ?>
			</div><!-- slideshow -->
		</div>
	</div><!-- modal-content -->
</section>


<?php get_footer(); ?>