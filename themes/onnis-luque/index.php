<?php get_header(); ?>

<!-- =================================================
==== HERO
================================================== -->
<section class="[ hero hero-home ]">
	<div class="[ opacity-gradient--top-bottom ][ z-index-2 ]"></div>
	<div class="[ text-center ][ center-bottom ][ z-index-2 ][ xmall-12 ]">
		<div class="wrapper">
			<a href="<?php echo site_url( 'archivo' ); ?>" class="[ button button--primary ][ inline-block ][ align-middle ]">Ver proyectos</a>
			<a href="<?php echo site_url( 'contacto' ); ?>" class="[ button button--primary ][ inline-block ][ align-middle ][ js-modal-opener ]" data-modal="contacto">Contáctame</a>
		</div>
	</div>
</section><!-- hero -->

<!-- =================================================
==== ARCHIVO
================================================== -->
<?php
$archivo_args = array(
	'post_type' => 'archivo',
	'posts_per_page' => 6,
);
$archivo_query = new WP_Query( $archivo_args );
if( $archivo_query->have_posts() ) : ?>
	<section class="[ archivo ][ margin-top-bottom--large ]">
		<div class="[ wrapper ]">
			
			<div class="[ row ][ large-10 center ]">
				
				<h2 class="[ uppercase ][ margin-bottom--small ][ text-thin ]">Proyectos <span class="[ text-bold ]" >Recientes</span></h2>
				<?php
				while ( $archivo_query->have_posts() ) : $archivo_query->the_post();
					$lugar = get_lugar_proyecto( $post->ID );
					$ano = get_ano_proyecto( $post->ID );
					$permalink = get_permalink( $post->ID );
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				?>
					<article class="[ column xmall-12 medium-6 ][ card ][ color-light ][ relative ][ margin-bottom ]">
					 	<a class="[ block ]" href="<?php echo $permalink ?>">
							<img class="[ card__image ]" src="<?php echo $image[0] ?>" alt="">
					 	</a>
					 	<div class="[ card__info ]">
					 		<h3 class="[ no-margin ]"><?php echo get_the_title(); ?></h3>
							<p class="[ text-thin ]"><?php echo $lugar . '. ' . $ano; ?></p>
					 	</div>
					</article>
				<?php endwhile; ?>
				<div class="[ column xmall-12 ][ text-center ]">
					<a href="<?php echo site_url( 'archivo' ); ?>" class="[ button button--dark ]">Ver todos</a>
				</div>
			</div>
		</div>
	</section><!-- archivo -->
<?php endif; wp_reset_query(); ?>


<!-- =================================================
==== MODAL CONTACTO
================================================== -->
<section class="[ modal-wrapper modal-contacto ][ hide ]">
	<div class="[ modal modal--full ][ diagonal-green-to-blue-gradient ]">
		<div class="[ modal-content ][ wrapper ][ text-center ]">
			<article>
				<div class="[ row ][ padding--top ]">
					<div class="[ xmall-6 ][ pull-right ][ hidden--large-inline ][ inline-block align-middle ]">
						<a class="[ block ][ button--light button--hollow ][ pull-right ][ bg-transparent ][ js-modal-closer ]" data-modal="contacto" href="#">
							<span class="[ block ][ no-padding ]">
								<img class="[ svg icon icon--medium ][ padding--small ][ light ]" src="<?php echo THEMEPATH; ?>images/close.svg" alt="menu">
							</span>
						</a>
					</div>
				</div><!-- row -->
			</article>

			<div class="[ row ][ color-intermediate ][ text-left ][ center-full ]">
				<div class="[ column xmall-12 medium-6 ][ margin-bottom ]">
					<h3>Información de contacto</h3>
					<h4 class="[ no-margin ]">Teléfono</h4>
					<p><a href="tel:<?php echo get_telefono_contacto(); ?>"><?php echo get_telefono_contacto(); ?></a></p>
					<h4 class="[ no-margin ]">Correo</h4>
					<p><a href="tel:<?php echo get_email_contacto(); ?>"><?php echo get_email_contacto(); ?></a></p>
				</div>
				<div class="[ column xmall-12 medium-6 ]">
					<form class="[ js-contact-form ]" action="" id="form-ui">
						<fieldset class="[ margin-bottom ]">
							<label class="[ field ]">
								<input class="[ gui-input ][ required ][ column xmall-12 ]" type="text" name="nombre" placeholder="Nombre">
							</label>
						</fieldset>
						<fieldset class="[ margin-bottom ]">
							<label class="[ field ]">
								<input class="[ gui-input ][ column xmall-12 ]" type="text" name="telefono" placeholder="Teléfono">
							</label>
						</fieldset>
						<fieldset class="[ margin-bottom ]">
							<label class="[ field ]">
								<input class="[ gui-input ][ column xmall-12 ][ required email ]" type="text" name="email" placeholder="E-mail">
							</label>
						</fieldset>
						<fieldset class="[ margin-bottom ]">
							<label class="field prepend-icon">
								<textarea class="[ gui-textarea ][ column xmall-12 ][ required ]" name="mensaje" placeholder="Mensaje"></textarea>
							</label>
						</fieldset>
						<fieldset class="[ margin-bottom ]">
							<input type="hidden" name="action" value="send_email_contacto">
							<button type="submit" class="[ xmall-12 ][ center ][ button button--intermediate button--hollow ]">Enviar</button>
						</fieldset>
					</form>
				</div>
			</div>

			
		</div>

		</div><!-- modal-content -->
	</div>
</section>


<?php get_footer(); ?>

