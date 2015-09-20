<?php get_header(); ?>

<!-- =================================================
==== PROYECTOS
================================================== -->
<?php if( have_posts() ) : ?>
	<div class="[ text-center ][ margin-top ]">
		<a class="[ button button--intermediate ][ js-modal-opener ]" href="#" data-modal="filtros" >Filtrar proyectos</a>
	</div>
	<section class="[ proyectos ]">
		<div class="[ wrapper ]">
			<h2 class="[ text-thin ]">Proyectos</h2>
			<div class="[ row ][ text-center ]">
				<?php
				if( empty( $_GET ) ){
					show_all_projects();
				} else {
					show_filtered_projects( $_GET );
				}
				?>
			</div>
		</div>
	</section><!-- proyectos -->
	
	<section class="[ filtros-proyectos ][ modal-wrapper modal-filtros ][ hide ]">
		<div class="[ modal modal--full ][ diagonal-green-to-blue-gradient ]">
			<div class="[ modal-content ][ wrapper ]">
				<article>
					<div class="[ row ][ padding--top ]">
						<div class="[ xmall-6 ][ pull-right ][ hidden--large-inline ][ inline-block align-middle ]">
							<a class="[ block ][ button--light button--hollow ][ pull-right ][ bg-transparent ][ js-modal-closer ]" data-modal="filtros" href="#">
								<span class="[ block ][ no-padding ]">
									<img class="[ svg icon icon--medium ][ padding--small ][ light ]" src="<?php echo THEMEPATH; ?>images/close.svg" alt="menu">
								</span>
							</a>
						</div>
					</div><!-- row -->
				</article>

				<form class="[ center-full ]" action="">
					<div class="[ row ][ wrapper ]">
						<h3>Filtros:</h3>
						<fieldset class="[ column xmall-6 ][ margin-bottom ]">
							<label class="field select">
								<select class="[ column xmall-12 ]" name="ano">
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
								<select class="[ column xmall-12 ]" name="arquitecto-despacho">
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
								<select class="[ column xmall-12 ]" name="lugar">
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
								<select class="[ column xmall-12 ]" name="tipologia">
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
								<select class="[ column xmall-12 ]" name="proyectos">
									<option value="">Proyectos</option>
									<?php $proyectos = get_proyectos(); ?>
									<?php foreach ( $proyectos as $key => $proyecto ) : ?>
										<option value="<?php echo $key; ?>"><?php echo $proyecto; ?></option>
									<?php endforeach; ?>
								</select>
								<i class="arrow"></i>
							</label>
						</fieldset>
						<fieldset class="[ margin-bottom ]">
							<button type="submit" class="[ button button--primary ][ column xmall-12 ]">Filtrar</button>
						</fieldset>
					</div>
				</form>

			</div><!-- modal-content -->
		</div>
	</section>

<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>
