<?php 
	get_header();
	the_post(); 
	$lugar = get_lugar_proyecto( $post->ID );
	$ano = get_ano_proyecto( $post->ID );
?>

<section class="[ single ]">
	<div class="[ bg-cover ][ margin-bottom ]">
		<?php the_post_thumbnail('full', array('class' => 'image-responsive')); ?>
	</div>	
	<div class="[ margin-bottom--large ][ single-content ]">
		<div class="[ wrapper ]">
			<div class="[ row ]">
				<h1 class="[ text-light text-center ][ no-margin ]"><?php the_title(); ?></h1>
				<h2 class="[ text-center ]"><small><?php echo $lugar . '. ' . $ano ?></small></h2>
				<div class="[ columna small-12 medium-10 large-8 center ]">
					<?php the_content(); ?>
				</div>
			</div>
		</div><!-- .wrapper -->
	</div>
</section>

<?php get_footer(); ?>