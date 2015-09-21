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
				<h1 class="[  ][ no-margin ]"><?php the_title(); ?></h1>
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

					$images = sga_gallery_images('medium', $galleryIDs); ?>

					<div class="[ row ]">
						<?php foreach ($images as $key => $image) {
							$imageID 	= $image[4];
							$imageURL	= $image[0];
							?>

							<a class="[ column xmall-12 medium-6 ][ card ][ margin-bottom ][ bg-cover ]" style="background-image: url('<?php echo $imageURL; ?>')" href="#" data-number="<?php echo $key+1; ?>">
							</a>
						<?php } ?>
					</div><!-- row -->
				<?php }
			} ?>

		</div><!-- .wrapper -->
	</div>
</section>

<?php get_footer(); ?>