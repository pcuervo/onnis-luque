<?php
get_header();
$tipologi_c = isset($_GET['tipologia']) ? $_GET['tipologia'] : '';
$arquitectos = isset($_GET['arquitecto-despacho']) ? $_GET['arquitecto-despacho'] : '';
$proyectos_c = isset($_GET['proyectos']) ? $_GET['proyectos'] : '';
$lugar_c = isset($_GET['lugar']) ? $_GET['lugar'] : '';
$ano_c = isset($_GET['ano']) ? $_GET['ano'] : ''; ?>

<div id="filters_h" class="[ wrapper ][ text-center ]" data-paso="1">
	<select class="[ column xmall-1 ][ filters-header hidden--medium ] [ shown--large ]">
		<option class="option-filter" value="" data-variable="tipologia">Tipología</option>
		<?php $tipologias = get_terms_proyectos( 'tipologia' ); ?>
		<?php foreach ( $tipologias as $key => $tipologia ) : 
			$select = $tipologi_c == $key ? 'selected' : ''; ?>
			<option class="option-filter" value="<?php echo $key; ?>" data-variable="tipologia" <?php echo $select; ?> ><?php echo $tipologia; ?></option>
		<?php endforeach; ?>
	</select>
	<select class="[ column xmall-1 ][ filters-header hidden--medium ] [ shown--large ]">
		<option value="" data-variable="arquitecto-despacho">Arquitecto</option>
		<?php $arquitectos_despachos = get_terms_proyectos( 'arquitecto-despacho' ); ?>
		<?php foreach ( $arquitectos_despachos as $key => $arq_desp ) :
			$select = $arquitectos == $key ? 'selected' : ''; ?>
			<option value="<?php echo $key; ?>" data-variable="arquitecto-despacho" <?php echo $select; ?> ><?php echo $arq_desp; ?></option>
		<?php endforeach; ?>
	</select>
	<select class="[ column xmall-1 ][ filters-header hidden--medium ] [ shown--large ]">
		<option value="" data-variable="proyectos">Proyecto</option>
		<?php $proyectos = get_proyectos(); ?>
		<?php foreach ( $proyectos as $key => $proyecto ) :
			$select = $proyectos_c == $key ? 'selected' : ''; ?>
			<option value="<?php echo $key; ?>" data-variable="proyectos" <?php echo $select; ?> ><?php echo $proyecto; ?></option>
		<?php endforeach; ?>
	</select>
	<select class="[ column xmall-1 ][ filters-header hidden--medium ] [ shown--large ]">
		<option value="" data-variable="lugar">Lugar</option>
		<?php $lugares = get_terms_proyectos( 'lugar' ); ?>
		<?php foreach ( $lugares as $key => $lugar ) :
			$select = $lugar_c == $key ? 'selected' : ''; ?>
			<option value="<?php echo $key; ?>" data-variable="lugar" <?php echo $select; ?> ><?php echo $lugar; ?></option>
		<?php endforeach; ?>
	</select>
	<select class="[ column xmall-1 ][ filters-header hidden--medium ] [ shown--large ]">
		<option value="" data-variable="ano">Año</option>
		<?php $anos = get_terms_proyectos( 'ano' ); ?>
		<?php foreach ( $anos as $key => $ano ) :
			$select = $ano_c == $key ? 'selected' : ''; ?>
			<option value="<?php echo $key; ?>" data-variable="ano" <?php echo $select; ?> ><?php echo $ano; ?></option>
		<?php endforeach; ?>
	</select>


	<a class="[ button button--primary button--rounded-bottom ][ no-margin ][ js-modal-opener ]" href="#" data-modal="filtros" >Filtrar proyectos</a>
	
</div>

<?php if( have_posts() ) : ?>


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
								<select class="[ column xmall-12 ]">
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

<?php else:
	echo '<p class="[ text-center ]">No se encontraron resultados</p>';
endif;

wpex_pagination();
get_footer();
?>
