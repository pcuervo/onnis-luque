<?php get_header(); ?>

<!-- =================================================
==== EDITORIAL
================================================== -->
<?php if( have_posts() ) : ?>
	<section class="[ editorial ]">
		<div class="[ wrapper ]">
			<h2 class="[ text-thin ]">Editorial</h2>
			<div class="row">
				<?php
				while ( have_posts() ) : the_post();
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				?>
					<div class="[ column xmall-6 medium-4 large-3 ][ margin-bottom ]">
						<img class="[ image-responsive ]" src="<?php echo $image[0] ?>">
					</div>
					<div class="[ hidden ]">
						<h3><?php echo get_the_title(); ?></h3>
						<p><?php echo get_the_content(); ?></p>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section><!-- editorial -->
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
</section>

<?php get_footer(); ?>