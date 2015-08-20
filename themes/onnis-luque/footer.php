		</div><!-- container -->

		<footer class="[ wrapper ]">

			<section class="[ ]">
				<div class="[ xmall-8 ][ center ]">
					<div class="[ column xmall-6 ]">
						<h3>Información de contacto</h3>
						<h4>Teléfono</h4>
						<p><a href="tel:<?php echo get_telefono_contacto(); ?>"><?php echo get_telefono_contacto(); ?></a></p>
						<h4>Correo</h4>
						<p><a href="tel:<?php echo get_email_contacto(); ?>"><?php echo get_email_contacto(); ?></a></p>
					</div>
					<div class="[ column xmall-6 ]">
						<form class="[ js-contact-form ]" action="" id="form-ui">
							<fieldset class="[ margin-bottom ]">
								<label class="[ field ]">
									<input class="[ gui-input ][ required ]" type="text" name="nombre" placeholder="Nombre">
								</label>
							</fieldset>
							<fieldset class="[ margin-bottom ]">
								<label class="[ field ]">
									<input class="[ gui-input ]" type="text" name="telefono" placeholder="Teléfono">
								</label>
							</fieldset>
							<fieldset class="[ margin-bottom ]">
								<label class="[ field ]">
									<input class="[ gui-input ][ required email ]" type="text" name="email" placeholder="E-mail">
								</label>
							</fieldset>
							<fieldset class="[ margin-bottom ]">
								<label class="field prepend-icon">
									<textarea class="[ gui-textarea ][ required ]" name="mensaje" placeholder="Mensaje"></textarea>
								</label>
							</fieldset>
							<fieldset class="[ margin-bottom ]">
								<input type="hidden" name="action" value="send_email_contacto">
								<button type="submit" class="[ button button--primary ]">Enviar</button>
							</fieldset>
						</form>
					</div>
				</div>
			</section>

			<section class="[ footer-links ][ text-center ]">
				<div class="[ xmall-10 ][ center ]">
					<div class="[ column xmall-6 ]">
						<p><small><strong>Teléfono: </strong><a href="tel:<?php echo get_telefono_contacto(); ?>"><?php echo get_telefono_contacto(); ?></a></small></p>
					</div>
					<div class="[ column xmall-6 ]">
						<p><small><strong>Correo: </strong><a href="mailto:<?php echo get_email_contacto(); ?>"><?php echo get_email_contacto(); ?></a></small></p>
					</div>
					<div class="[ column xmall-12 ]">
						<p><small><strong>Onnis Luque, </strong>Architectural Photography - <?php echo date('Y'); ?> Todos los derechos reservados</small></p>
					</div>
				</div>
			</section>

		</footer>
		<?php wp_footer(); ?>
	</body>
</html>