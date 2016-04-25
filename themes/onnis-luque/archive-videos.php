<?php
get_header();

if( have_posts() ) : ?>
	<!-- =================================================
	==== VIDEOS
	================================================== -->
	<section class="[ proyectos ]">
		<div class="[ wrapper ]">
			<div class="[ row ]">
				<?php
				while ( have_posts() ) : the_post();
					$lugar = get_lugar_proyecto( $post->ID );
					$ano = get_ano_proyecto( $post->ID );
					$permalink = get_permalink( $post->ID );
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single_proyecto' );
				?>

					<a class="[ full-height ][ block ][ relative ]" href="<?php echo $permalink ?>">
						<article class="[ column xmall-12 medium-6 large-4 ][ card ][ color-light ][ relative ][ margin-bottom ]">
							<img class="[ card__image ][ center-full ]" src="<?php echo $image[0] ?>" alt="">
							<div class="[ card__info ][ xmall-12 ][ z-index-1 ]">
								<h3 class="[ no-margin ]"><?php the_title(); ?></h3>
								<p><?php echo $lugar . '. ' . $ano; ?></p>
							</div>
						</article>
					</a>
				<?php endwhile; wp_reset_query(); ?>
			</div>
		</div>
	</section><!-- proyectos -->

<?php
endif;
get_footer();
?>