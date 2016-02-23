<?php
get_header();

if( have_posts() ) : ?>
	<div class="[ text-right ]">
		<a class="[ button button--primary button--rounded-bottom ][ no-margin ][ js-modal-opener ]" href="#" data-modal="filtros" >Filtrar proyectos</a>
		
		<select class="[ column xmall-1 ]" name="ano">
			<option value="">Año</option>
			<?php $anos = get_terms_proyectos( 'ano' ); ?>
			<?php foreach ( $anos as $key => $ano ) : ?>
				<option value="<?php echo $key; ?>"><?php echo $ano; ?></option>
			<?php endforeach; ?>
		</select>
		<select class="[ column xmall-1 ]" name="arquitecto-despacho">
			<option value="">Todos</option>
			<?php $arquitectos_despachos = get_terms_proyectos( 'arquitecto-despacho' ); ?>
			<?php foreach ( $arquitectos_despachos as $key => $arq_desp ) : ?>
				<option value="<?php echo $key; ?>"><?php echo $arq_desp; ?></option>
			<?php endforeach; ?>
		</select>
		<select class="[ column xmall-1 ]" name="arquitecto-despacho">
			<option value="">Todos</option>
			<?php $arquitectos_despachos = get_terms_proyectos( 'arquitecto-despacho' ); ?>
			<?php foreach ( $arquitectos_despachos as $key => $arq_desp ) : ?>
				<option value="<?php echo $key; ?>"><?php echo $arq_desp; ?></option>
			<?php endforeach; ?>
		</select>
		<select class="[ column xmall-1 ]" name="arquitecto-despacho">
			<option value="">Todos</option>
			<?php $arquitectos_despachos = get_terms_proyectos( 'arquitecto-despacho' ); ?>
			<?php foreach ( $arquitectos_despachos as $key => $arq_desp ) : ?>
				<option value="<?php echo $key; ?>"><?php echo $arq_desp; ?></option>
			<?php endforeach; ?>
		</select>
		<select class="[ column xmall-1 ]" name="arquitecto-despacho">
			<option value="">Todos</option>
			<?php $arquitectos_despachos = get_terms_proyectos( 'arquitecto-despacho' ); ?>
			<?php foreach ( $arquitectos_despachos as $key => $arq_desp ) : ?>
				<option value="<?php echo $key; ?>"><?php echo $arq_desp; ?></option>
			<?php endforeach; ?>
		</select>
	</div>


	<!-- =================================================
	==== PROYECTOS
	================================================== -->
	<section class="[ proyectos ]">
		<div class="[ wrapper ]">
			<h2 class="[ text-thin ]">Proyectos</h2>
			<div class="[ row ]">
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


	<!-- =================================================
	==== FILTROS
	================================================== -->
	<section class="[ filtros-proyectos ][ modal-wrapper modal-filtros ][ hide ]">
		<div class="[ modal ][ diagonal-green-to-blue-gradient ]">
			<div class="[ modal-content ][ wrapper ]">
				<article class="[ ]">
					<div class="[ clearfix ][ padding--top ]">
						<div class="[ pull-right ][ hidden--large-inline ][ inline-block align-middle ]">
							<a class="[ block ][ pull-right ][ bg-transparent ][ js-modal-closer ]" data-modal="filtros" href="#">
								<span class="[ block ][ no-padding ]">
									<img class="[ svg icon icon--medium ][ color-intermediate ][ padding--small ]" src="<?php echo THEMEPATH; ?>images/close.svg" alt="menu">
								</span>
							</a>
						</div>
					</div><!-- row -->
				</article>

				<form class="[ center-full ][ form ]" action="">
					<div class="[ row ][ wrapper ]">
						<h3>Filtros:</h3>
						<fieldset class="[ column xmall-12 medium-6 ][ margin-bottom--large ]">
							<label class="field select">
								<span class="[ uppercase ]">Año</span>
								<select class="[ column xmall-12 ]" name="ano">
									<option value="">Todos</option>
									<?php $anos = get_terms_proyectos( 'ano' ); ?>
									<?php foreach ( $anos as $key => $ano ) : ?>
										<option value="<?php echo $key; ?>"><?php echo $ano; ?></option>
									<?php endforeach; ?>
								</select>
								<i class="arrow"></i>
							</label>
						</fieldset>
						<fieldset class="[ column xmall-12 medium-6 ][ margin-bottom--large ]">
							<label class="field select">
								<span class="[ uppercase ]">Arquitecto / Despacho</span>
								<select class="[ column xmall-12 ]" name="arquitecto-despacho">
									<option value="">Todos</option>
									<?php $arquitectos_despachos = get_terms_proyectos( 'arquitecto-despacho' ); ?>
									<?php foreach ( $arquitectos_despachos as $key => $arq_desp ) : ?>
										<option value="<?php echo $key; ?>"><?php echo $arq_desp; ?></option>
									<?php endforeach; ?>
								</select>
								<i class="arrow"></i>
							</label>
						</fieldset>
						<fieldset class="[ column xmall-12 medium-6 ][ margin-bottom--large ]">
							<label class="field select">
								<span class="[ uppercase ]">Lugar</span>
								<select class="[ column xmall-12 ]" name="lugar">
									<option value="">Todos</option>
									<?php $lugares = get_terms_proyectos( 'lugar' ); ?>
									<?php foreach ( $lugares as $key => $lugar ) : ?>
										<option value="<?php echo $key; ?>"><?php echo $lugar; ?></option>
									<?php endforeach; ?>
								</select>
								<i class="arrow"></i>
							</label>
						</fieldset>
						<fieldset class="[ column xmall-12 medium-6 ][ margin-bottom--large ]">
							<label class="field select">
								<span class="[ uppercase ]">Tipología</span>
								<select class="[ column xmall-12 ]" name="tipologia">
									<option value="">Todos</option>
									<?php $tipologias = get_terms_proyectos( 'tipologia' ); ?>
									<?php foreach ( $tipologias as $key => $tipologia ) : ?>
										<option value="<?php echo $key; ?>"><?php echo $tipologia; ?></option>
									<?php endforeach; ?>
								</select>
								<i class="arrow"></i>
							</label>
						</fieldset>
						<fieldset class="[ column xmall-12 medium-6 ][ margin-bottom--large ]">
							<label class="field select">
								<span class="[ uppercase ]">Proyectos</span>
								<select class="[ column xmall-12 ]" name="proyectos">
									<option value="">Todos</option>
									<?php $proyectos = get_proyectos(); ?>
									<?php foreach ( $proyectos as $key => $proyecto ) : ?>
										<option value="<?php echo $key; ?>"><?php echo $proyecto; ?></option>
									<?php endforeach; ?>
								</select>
								<i class="arrow"></i>
							</label>
						</fieldset>
						<span><small>&nbsp;</small></span>
						<button type="submit" class="[ column xmall-12 medium-6 ][ margin-bottom--large ][ button button--dark ][ column xmall-12 ]">Filtrar</button>
					</div>
				</form>

			</div><!-- modal-content -->
		</div>
	</section>

<?php
endif;

wpex_pagination();
get_footer();
?>
