			<footer class="[ padding ][ bg-primary ][ color-intermediate ]">

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
		</div><!-- container -->
		<?php wp_footer(); ?>
	</body>
</html>