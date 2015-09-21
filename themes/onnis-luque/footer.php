		</div><!-- container -->

		<section class="[ modal-wrapper modal-nav ][ hide ]">
			<div class="[ modal modal--full ][ diagonal-green-to-blue-gradient ]">
				<div class="[ modal-content ][ wrapper ]">
					<article>
						<div class="[ row ][ padding--top ]">
							<div class="[ xmall-6 ][ pull-right ][ hidden--large-inline ][ inline-block align-middle ]">
								<a class="[ block ][ pull-right ][ color-intermediate ][ js-modal-closer ]" data-modal="nav" href="#">
									<span class="[ block ][ no-padding ]">
										<img class="[ svg icon icon--medium ][ padding--small ][ light ]" src="<?php echo THEMEPATH; ?>images/close.svg" alt="menu">
									</span>
								</a>
							</div>
						</div><!-- row -->
					</article>

					<nav class="[ center-full ][ hidden--large ]">
						<a href="<?php echo site_url(); ?>" class="[ <?php echo is_home() ? 'active' : ''; ?> ][ light ][ button button--hollow ][ text-center uppercase ][ padding ][ xmall-12 ]">Inicio</a>
						<a href="<?php echo site_url('archivo'); ?>" class="[ <?php echo get_post_type() == 'archivo' ? 'active' : ''; ?> ] [ light ][ button button--hollow ][ text-center uppercase ][ padding ][ xmall-12 ]">Archivo</a>
						<a href="<?php echo site_url('talleres'); ?>" class="[ <?php echo get_post_type() == 'talleres' ? 'active' : ''; ?> ] [ light ][ button button--hollow ][ text-center uppercase ][ padding ][ xmall-12 ]">Talleres</a>
						<a href="<?php echo site_url('editorial'); ?>" class="[ <?php echo get_post_type() == 'editorial' ? 'active' : ''; ?> ] [ light ][ button button--hollow ][ text-center uppercase ][ padding ][ xmall-12 ]">Editorial</a>
					</nav><!-- categorias -->

				</div><!-- modal-content -->
			</div>
		</section>

		<footer class="[ padding--bottom ][ bg-primary ][ color-intermediate ]">

			<div class="[ wrapper ]">
				
				<section class="[ footer-links ][ text-center ]">
					<a class="[ bg-transparent ][ decoration-none ]" href="#">
						<span class="[ no-padding ]">
							<img class="[ svg icon icon--medium ][ padding--small ][ color-intermediate ]" src="<?php echo THEMEPATH; ?>images/instagram.svg" alt="menu">
						</span>
					</a>
					<a class="[ bg-transparent ][ decoration-none ]" href="#">
						<span class="[ no-padding ]">
							<img class="[ svg icon icon--medium ][ padding--small ][ color-intermediate ]" src="<?php echo THEMEPATH; ?>images/facebook.svg" alt="menu">
						</span>
					</a>
					<div class="[ xmall-12 ][ center ][ row ]">
						<div class="[ column xmall-6 ]">
							<p><small><strong>Teléfono: </strong><a href="tel:<?php echo get_telefono_contacto(); ?>"><?php echo get_telefono_contacto(); ?></a></small></p>
						</div>
						<div class="[ column xmall-6 ]">
							<p><small><strong>Correo: </strong><a href="mailto:<?php echo get_email_contacto(); ?>"><?php echo get_email_contacto(); ?></a></small></p>
						</div>
						<div class="[ column xmall-12 ]">
							<p><small><strong>Onnis Luque, </strong>Architectural Photography <br> &copy; <?php echo date('Y'); ?> Todos los derechos reservados</small></p>
						</div>
					</div>
				</section>

			</div><!-- wrapper -->


		</footer>
		<?php wp_footer(); ?>
	</body>
</html>