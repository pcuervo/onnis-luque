<?php
get_header();
$postCounter = 0;
?>

<!-- =================================================
==== EDITORIAL
================================================== -->
<?php if( have_posts() ) : ?>
	<section class="[ editorial ]">
		<div class="[ wrapper ]">
			<h2 class="[ text-thin ]">Editorial</h2>
			<div class="[ row ]">
				<?php
				while ( have_posts() ) : the_post();
				?>
					<div class="[ column xmall-6 medium-4 large-3 ][ margin-bottom ]">
						<a class="[ block ][ js-editorial-cover ]" href="#" data-number="<?php echo $postCounter; ?>">
							<?php the_post_thumbnail('single_editorial', array('class' => '[ image-responsive ]')); ?>
						</a>

					</div>
				<?php $postCounter++; endwhile; ?>
			</div>
		</div>
	</section><!-- editorial -->
<?php endif; wp_reset_query(); ?>




<!-- =================================================
==== MODAL EDITORIAL
================================================== -->
<section class="[ modal-wrapper modal-editorial ][ hide ]">
	<div class="[ modal modal--full ]">
		<div class="[ xmall-12 ][ close-modal ][ clearfix ][ absolute z-index-6 ]">
			<p class="[ text-center ]"><a class="[ block ][ padding ][[ bg-transparent ][ js-gallery-toggler ]" data-modal="contacto" href="#">
				Cerrar
			</a></p>
		</div>
		<div class="[ modal-content ][ wrapper ][ text-center ]">
			<div class="[ slideshow ]">
				<?php
				$postCounter = 1;
				if( have_posts() ) : while ( have_posts() ) : the_post();

					$galleries = get_galleries_from_content($post);
					foreach ($galleries as $gallery => $galleryIDs) {
						$images = sga_gallery_images('full', $galleryIDs); ?>
						<div class="[ row ]">
							<?php
							foreach ($images as $key => $image) {
								$imageID 	= $image[4];
								$imageURL	= $image[0];
							?>
								<div class="[ image-single ][ bg-light ]">
									<p class="[ clearfix ][ cycle-info ][ text-center ]"><?php echo $postCounter; ?>/<?php echo $wp_query->post_count;; ?></p>
									<img class="[ center block ]" src="<?php echo $imageURL; ?>">
								</div>
							<?php
							} ?>
						</div><!-- row -->
					<?php
					}

				$postCounter++; endwhile; endif; ?>

				<p class="[ span xmall-6 ][ inline-block align-middle ][ text-left ][ no-margin ][ cycle-control cycle-prev ]">Atras</p><p
					class="[ span xmall-6 ][ inline-block align-middle ][ text-right ][ cycle-control cycle-next ]">Siguiente</p>
			</div><!-- slideshow -->
		</div>
	</div><!-- modal-content -->
</section>

<?php get_footer(); ?>