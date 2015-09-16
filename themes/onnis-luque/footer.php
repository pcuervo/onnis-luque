		</div><!-- container -->

		<section class="[ modal-wrapper modal-nav ][ hide ]">
			<div class="[ modal modal--full ][ diagonal-green-to-blue-gradient ]">
				<div class="[ modal-content ][ wrapper ]">
					<article>
						<div class="[ row ][ padding--top ]">
							<div class="[ xmall-6 ][ pull-right ][ hidden--large-inline ][ inline-block align-middle ]">
								<a class="[ block ][ button--light button--hollow ][ pull-right ][ bg-transparent ][ js-modal-closer ]" data-modal="nav" href="#">
									<span class="[ block ][ no-padding ]">
										<img class="[ svg icon icon--medium ][ padding--small ][ light ]" src="<?php echo THEMEPATH; ?>images/close.svg" alt="menu">
									</span>
								</a>
							</div>
						</div><!-- row -->
					</article>

					<nav class="[ center-full ][ hidden--large ]">
						<a href="<?php echo site_url(); ?>" class="[ <?php echo is_home() ? 'active' : ''; ?> ][ nav-item ][ light ][ block ][ text-center uppercase ][ padding ]">Inicio</a>
						<a href="<?php echo site_url('archivo'); ?>" class="[ <?php echo get_post_type() == 'archivo' ? 'active' : ''; ?> ] [ nav-item ][ light ][ block ][ text-center uppercase ][ padding ]">Archivo</a>
						<a href="<?php echo site_url('talleres'); ?>" class="[ <?php echo get_post_type() == 'talleres' ? 'active' : ''; ?> ] [ nav-item ][ light ][ block ][ text-center uppercase ][ padding ]">Talleres</a>
						<a href="<?php echo site_url('editorial'); ?>" class="[ <?php echo get_post_type() == 'editorial' ? 'active' : ''; ?> ] [ nav-item ][ light ][ block ][ text-center uppercase ][ padding ]">Editorial</a>
					</nav><!-- categorias -->

				</div><!-- modal-content -->
			</div>
		</section>

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