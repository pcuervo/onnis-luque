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
						<div class="[ relative ][ box-hover-content ]">
							<a href="<?php the_permalink(); ?>" class="[ block ]">
								<?php the_post_thumbnail('single_editorial', array('class' => '[ image-responsive ]')); ?>
								<div class="[ absolute ][ text-center ][ color-dark ]">
									<h3 class="[ uppercase ]"><?php echo get_the_title(); ?></h3>
									<p><?php the_content(); ?></p>
								</div>
							</a>
						</div>
					</div>

				<?php $postCounter++; endwhile; ?>
			</div>
		</div>
	</section><!-- editorial -->
<?php endif; wp_reset_query(); ?>

<!-- =================================================
==== MODAL EDITORIAL
================================================== -->


<?php get_footer(); ?>