<?php get_header(); ?>

<!-- =================================================
==== PROYECTOS
================================================== -->
<?php if( have_posts() ) : ?>
	<section class="[ talleres ]">
		<div class="[ wrapper ][ text-center ]">
			<h2 class="">Proyectos</h2>
			<div class="row">
				<?php
				if( empty( $_GET ) ){
					show_all_projects();
				} else {
					show_filtered_projects( $_GET );
				}
				?>
			</div>
		</div>
	</section><!-- talleres -->

	<section class="[ filtros-proyectos ]">
		<div class="[ wrapper ]">
			<h3 class="[ hidden--large ]">Filtar por:</h3>
			<form action="">
				<div class="[ row ]">
					<fieldset class="[ column xmall-6 ][ margin-bottom ]">
						<label class="field select">
							<select name="ano">
								<option value="">Año</option>
								<?php $anos = get_terms_proyectos( 'ano' ); ?>
								<?php foreach ( $anos as $key => $ano ) : ?>
									<option value="<?php echo $key; ?>"><?php echo $ano; ?></option>
								<?php endforeach; ?>
							</select>
							<i class="arrow"></i>
						</label>
					</fieldset>
					<fieldset class="[ column xmall-6 ][ margin-bottom ]">
						<label class="field select">
							<select name="arquitecto-despacho">
								<option value="">Arquitecto / Despacho</option>
								<?php $arquitectos_despachos = get_terms_proyectos( 'arquitecto-despacho' ); ?>
								<?php foreach ( $arquitectos_despachos as $key => $arq_desp ) : ?>
									<option value="<?php echo $key; ?>"><?php echo $arq_desp; ?></option>
								<?php endforeach; ?>
							</select>
							<i class="arrow"></i>
						</label>
					</fieldset>
					<fieldset class="[ column xmall-6 ][ margin-bottom ]">
						<label class="field select">
							<select name="lugar">
								<option value="">Lugar</option>
								<?php $lugares = get_terms_proyectos( 'lugar' ); ?>
								<?php foreach ( $lugares as $key => $lugar ) : ?>
									<option value="<?php echo $key; ?>"><?php echo $lugar; ?></option>
								<?php endforeach; ?>
							</select>
							<i class="arrow"></i>
						</label>
					</fieldset>
					<fieldset class="[ column xmall-6 ][ margin-bottom ]">
						<label class="field select">
							<select name="tipologia">
								<option value="">Tipología</option>
								<?php $tipologias = get_terms_proyectos( 'tipologia' ); ?>
								<?php foreach ( $tipologias as $key => $tipologia ) : ?>
									<option value="<?php echo $key; ?>"><?php echo $tipologia; ?></option>
								<?php endforeach; ?>
							</select>
							<i class="arrow"></i>
						</label>
					</fieldset>
					<fieldset class="[ column xmall-6 ][ margin-bottom ]">
						<label class="field select">
							<select name="proyectos">
								<option value="">Proyectos</option>
								<?php $proyectos = get_proyectos(); ?>
								<?php foreach ( $proyectos as $key => $proyecto ) : ?>
									<option value="<?php echo $key; ?>"><?php echo $proyecto; ?></option>
								<?php endforeach; ?>
							</select>
							<i class="arrow"></i>
						</label>
					</fieldset>
					<fieldset class="[ column xmall-6 ][ margin-bottom ]">
						<button type="submit" class="[ button button--primary ]">Filtrar</button>
					</fieldset>
				</div>
			</form>
		</div>
	</section>
<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>
