<?php
	get_header();
	the_post();
	$lugar = get_lugar_proyecto( $post->ID );
	$autor = get_autor_proyecto( $post->ID );
	$ano = get_ano_proyecto( $post->ID );
	$video_url = get_post_meta($post->ID, '_url_video_meta', true);
	$prev_post = get_previous_post();
	$next_post = get_next_post();
?>

<section class="[ single ]">
	<div class="[ wrapper ]">
		<div class="[ video-container-wrapper ][ relative ]">
			<div class="[ video-container ][ margin-bottom ]">
				<?php echo $video_url; ?>
			</div>
			<?php if ($prev_post) : ?>
				<a href="<?php echo get_permalink( $prev_post->ID ); ?>"><img class="[ span ][ text-left ][ padding ][ cycle-control cycle-prev ]" src="<?php echo THEMEPATH; ?>images/prev.png"></a>
			<?php endif;

			if ($next_post) : ?>
				<a href="<?php echo get_permalink( $next_post->ID ); ?>"><img class="[ span ][ text-left ][ padding ][ cycle-control cycle-next ]" src="<?php echo THEMEPATH; ?>images/next.png"></a>
			<?php endif; ?>
		</div>
		<div class="[ text-center ][ margin-bottom--large ]">
			<h2 class="[  ][ no-margin ]"><?php the_title(); ?></h2>
			<h3 class="[ no-margin ]"><small><?php echo $autor ?></small></h3>
		</div>
		<div class="[ xmall-12 medium-10 large-8 center ][ text-center ]">
			<?php the_content(); ?>
		</div>

	</div><!-- wrapper -->
</section>

<?php get_footer(); ?>