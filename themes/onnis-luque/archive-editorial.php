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
						<div class="[ relative ][ box-hover-content ][ js-modal-opener ]" data-modal="taller-<?php echo $post->ID; ?>">
							<?php the_post_thumbnail('single_editorial', array('class' => '[ image-responsive ]')); ?>
							<div class="[ absolute ][ text-center ][ color-dark ]">
								<h3 class="[ uppercase ]"><?php echo get_the_title(); ?></h3>
								<p><?php the_content(); ?></p>
							</div>
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
									<?php the_post_thumbnail('full', array('class' => '[ image-single ][ center-full ][ opacity-10 ]')); ?>
								</div>
							</div>
						</div>
					</section>

				<?php $postCounter++; endwhile; ?>
			</div>
		</div>
	</section><!-- editorial -->
<?php endif; wp_reset_query(); ?>

<!-- =================================================
==== MODAL EDITORIAL
================================================== -->


<?php get_footer(); ?>