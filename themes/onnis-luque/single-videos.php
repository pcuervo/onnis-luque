<?php
	get_header();
	the_post();
	$lugar = get_lugar_proyecto( $post->ID );
	$autor = get_autor_proyecto( $post->ID );
	$ano = get_ano_proyecto( $post->ID );
	$video_url = get_post_meta($post->ID, '_url_video_meta', true);
?>

<section class="[ single ]">
	<div class="[ wrapper ]">
		<div class="[ video-container ][ margin-bottom ]">
			<?php echo $video_url; ?>
		</div>
		<div class="[ text-center ][ margin-bottom--large ]">
			<h2 class="[  ][ no-margin ]"><?php the_title(); ?></h2>
			<h3 class="[ no-margin ]"><small><?php echo $autor ?></small></h3>
			<p class="[  ]"><?php echo $lugar . '. ' . $ano ?></p>
		</div>
		<div class="[ xmall-12 medium-10 large-8 center ][ text-center ]">
			<?php the_content(); ?>
		</div>

	</div><!-- wrapper -->
</section>

<?php get_footer(); ?>