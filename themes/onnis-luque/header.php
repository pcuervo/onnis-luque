<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<!-- Sets initial viewport load and disables zooming -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- SEO -->
		<meta name="keywords" content="">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<!-- Compatibility -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">
		<!-- Favicon - generated with http://www.favicomatic.com/ -->
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="Onnis Luque Photography"/>
		<meta name="msapplication-TileColor" content="#009C9F" />
		<meta name="msapplication-TileImage" content="<?php echo THEMEPATH; ?>favicon/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="<?php echo THEMEPATH; ?>favicon/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="<?php echo THEMEPATH; ?>favicon/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="<?php echo THEMEPATH; ?>favicon/mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="<?php echo THEMEPATH; ?>favicon/mstile-310x310.png" />

		<!-- Google font(s) -->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,100' rel='stylesheet' type='text/css'>
		<!-- Font awesome -->
		<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

		<!-- Typekit -->
		<!-- <script src="//use.typekit.net/xxxxxx.js"></script> -->
		<!-- <script>try{Typekit.load();}catch(e){}</script> -->
		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="[ container ]">

			<section class="[ menu-nav ][ xmall-12 ][ bg-light ][ drop-shadow ][ hidden--large ][ hide ][ fixed fixed--reset z-index-7 ]">
				<div class="[ wrapper ][ padding--top-bottom--small ]">
					<a class="[ block ][ pull-right ][ color-intermediate ][ js-menu-toggler ]" data-menu="nav" href="#">
						<span class="[ block ][ no-padding ]">
							<img class="[ svg icon icon--small ][ light ]" src="<?php echo THEMEPATH; ?>images/close.svg" alt="menu">
						</span>
					</a>

					<nav class="[ text-center ][ uppercase ]">
						<a href="<?php echo site_url(); ?>" class="[ <?php echo is_home() ? 'active' : ''; ?> ][ button button--ink__intermediate ][ no-padding ][ xmall-12 ]">Inicio</a>
						<a href="<?php echo site_url('archivo'); ?>" class="[ <?php echo get_post_type() == 'archivo' ? 'active' : ''; ?> ][ button button--ink__intermediate ][ no-padding ][ xmall-12 ]">Foto</a>
						<a href="<?php echo site_url('videos'); ?>" class="[ <?php echo get_post_type() == 'videos' ? 'active' : ''; ?> ][ button button--ink__intermediate ][ no-padding ][ xmall-12 ]">Video</a>
						<a href="<?php echo site_url('talleres'); ?>" class="[ <?php echo get_post_type() == 'talleres' ? 'active' : ''; ?> ][ button button--ink__intermediate ][ no-padding ][ xmall-12 ]">Talleres</a>
						<a href="<?php echo site_url('editorial'); ?>" class="[ <?php echo get_post_type() == 'editorial' ? 'active' : ''; ?> ][ button button--ink__intermediate ][ no-padding ][ xmall-12 ]">Editorial</a>
					</nav><!-- categorias -->

				</div><!-- wrapper -->
			</section>

			<?php if ( is_home() ) : ?>

				<!-- Home mobile header on top
				================================================== -->
				<header class="[ header--home ][ hidden--large ]">
					<div class="[ wrapper ]">
						<div class="[ row ][ padding--top--small padding--bottom--small ]">
							<div class="[ xmall-4 ][ inline-block align-top ]">
								&nbsp;
							</div><div
							class="[ xmall-4 ][ inline-block align-top ]">
								<img class="[ svg ][ block center ][ color-light ][ logo logo-home ]" alt="Onnis Luque" src="<?php echo THEMEPATH ?>images/logo-onnis-square.svg">
							</div><div
							class="[ xmall-4 ][ inline-block align-top ]">
								<a class="[ block ][ pull-right ][ js-menu-toggler ]" data-menu="nav" href="#">
									<span class="[ block ][ no-padding ]">
										<img class="[ svg icon icon--medium ][ color-light ][ padding--xmall ]" src="<?php echo THEMEPATH; ?>images/hamburger.svg" alt="menu">
									</span>
								</a>
							</div>
						</div><!-- row -->
					</div><!-- wrapper -->
				</header><!-- hidden-large -->

				<!-- Home mobile header when scrolled
				================================================== -->
				<header class="[ header--home ][ drop-shadow ][ scrolled ][ hide ][ hidden--large ]">
					<div class="[ wrapper ]">
						<div class="[ row ][  ]">
							<div class="[ span xmall-6 large-1 ]">
								<a class="[ block ][ js-modal-opener ]" data-modal="nav" href="#">
									<span class="[ block ][ no-padding ]">
										<img class="[ svg icon icon--medium ][ color-intermediate ][ padding--small ]" src="<?php echo THEMEPATH; ?>images/logo-onnis-triangle.svg" alt="menu">
									</span>
								</a>
							</div>
							<div class="[ span xmall-6 ]">
								<a class="[ block ][ pull-right ][ js-menu-toggler ]" data-menu="nav" href="#">
									<span class="[ block ][ no-padding ]">
										<img class="[ svg icon icon--medium ][ color-intermediate ][ padding--small ]" src="<?php echo THEMEPATH; ?>images/hamburger.svg" alt="menu">
									</span>
								</a>
							</div>
						</div><!-- row -->
					</div>
				</header>

				<!-- Home desktop header
				================================================== -->
				<header class="[ header--home--desktop ][ shown--large ]">
					<div class="[ wrapper ]">
						<div class="[ row ][ padding--top--small padding--bottom--small ]">
							<div class="[ xmall-4 ][ inline-block align-top ]">
								&nbsp;
							</div><div
							class="[ xmall-4 ][ inline-block align-top ]">
								<img class="[ svg ][ block center ][ color-light ][ logo logo-home ]" alt="Onnis Luque" src="<?php echo THEMEPATH ?>images/logo-onnis-square.svg">
							</div><div
							class="[ xmall-4 ][ inline-block align-top ]">
								&nbsp;
							</div>
						</div><!-- row -->
						<hr class="[ no-margin ][ divider divider--light ]">
						<nav class="[ text-center ][ uppercase ]">
							<a href="<?php echo site_url(); ?>" class="[ button button--ink ][ inline-block align-middle ][ <?php echo is_home() ? 'active' : ''; ?> ]">Inicio</a>
							<a href="<?php echo site_url('archivo'); ?>" class="[ button button--ink ][ inline-block align-middle ][ <?php echo get_post_type() == 'archivo' ? 'active' : ''; ?> ]">Foto</a>
							<a href="<?php echo site_url('videos'); ?>" class="[ button button--ink ][ inline-block align-middle ][ <?php echo get_post_type() == 'videos' ? 'active' : ''; ?> ]">Video</a>
							<a href="<?php echo site_url('talleres'); ?>" class="[ button button--ink ][ inline-block align-middle ][ <?php echo get_post_type() == 'talleres' ? 'active' : ''; ?> ]">Talleres</a>
							<a href="<?php echo site_url('editorial'); ?>" class="[ button button--ink ][ inline-block align-middle ][ <?php echo get_post_type() == 'editorial' ? 'active' : ''; ?> ]">Editorial</a>
						</nav>
					</div><!-- wrapper -->
				</header><!-- hidden-large -->

				<!-- Home desktop header when scrolled
				================================================== -->
				<header class="[ header--home--desktop [ drop-shadow ][ bg-light ][ shown--large ][ scrolled ][ hide ]">
					<div class="[ wrapper ]">
						<div class="[ row ][ padding--top--small padding--bottom--small ]">
							<div class="[ xmall-4 ][ inline-block align-middle ]">
								<div class="[ logo ]">
									<a href="<?php echo site_url(); ?>">
										<img alt="Onnis Luque" src="<?php echo THEMEPATH ?>images/logo-onnis-horizontal.svg" class="[ svg ][ icon icon--xlarge ][ color-intermediate ]">
									</a>
								</div>
							</div><div class="[ xmall-8 ][ inline-block align-middle ]">
								<nav class="[ text-right ][ uppercase ]">
									<a href="<?php echo site_url(); ?>" class="[ button button--ink__intermediate ][ inline-block align-middle ][ <?php echo is_home() ? 'active' : ''; ?> ]">Inicio</a>
									<a href="<?php echo site_url('archivo'); ?>" class="[ button button--ink__intermediate ][ inline-block align-middle ][ <?php echo get_post_type() == 'archivo' ? 'active' : ''; ?> ]">Foto</a>
									<a href="<?php echo site_url('videos'); ?>" class="[ button button--ink__intermediate ][ inline-block align-middle ][ <?php echo get_post_type() == 'videos' ? 'active' : ''; ?> ]">Video</a>
									<a href="<?php echo site_url('talleres'); ?>" class="[ button button--ink__intermediate ][ inline-block align-middle ][ <?php echo get_post_type() == 'talleres' ? 'active' : ''; ?> ]">Talleres</a>
									<a href="<?php echo site_url('editorial'); ?>" class="[ button button--ink__intermediate ][ inline-block align-middle ][ <?php echo get_post_type() == 'editorial' ? 'active' : ''; ?> ]">Editorial</a>
								</nav>
							</div>
						</div>
						<hr class="[ divider ]">
					</div>
				</header>

			<?php else: ?>

				<!-- !Home header mobile
				================================================== -->
				<header class="[ header header-not-home ][ drop-shadow ][ hidden--large ][ bg-light ]">
					<div class="[ wrapper ]">
						<div class="[ row ][  ]">
							<div class="[ span xmall-6 large-1 ]">
								<a class="[ block ]" data-modal="nav" href="<?php echo site_url(); ?>">
									<span class="[ block ][ no-padding ]">
										<img class="[ svg icon icon--medium ][ padding--small ][ color-intermediate ]" src="<?php echo THEMEPATH; ?>images/logo-onnis-triangle.svg" alt="menu">
									</span>
								</a>
							</div>
							<div class="[ span xmall-6 ]">
								<a class="[ block ][ pull-right ][ js-menu-toggler ]" data-menu="nav" href="#">
									<span class="[ block ][ no-padding ]">
										<img class="[ svg icon icon--medium ][ padding--small ]<?php echo ( is_singular('archivo') ? '[ color-intermediate ]' : '[ color-intermediate ]') ?>" src="<?php echo THEMEPATH; ?>images/hamburger.svg" alt="menu">
									</span>
								</a>
							</div>
						</div><!-- row -->
					</div>
				</header>

				<!-- !Home header desktop
				================================================== -->
				<header class="[ header header-not-home__desktop ][ shown--large ][ bg-light ][ drop-shadow ][ overflow-hidden ]">
					<div class="[ wrapper ]">
						<div class="[ row ]">
							<div class="[ xmall-4 ][ inline-block align-middle ]">
								<div class="[ logo ]">
									<a href="<?php echo site_url(); ?>">
										<img alt="Onnis Luque" src="<?php echo THEMEPATH ?>images/logo-onnis-horizontal.svg" class="[ svg ][ icon icon--xlarge ][ color-intermediate ]">
									</a>
								</div>
							</div>
							<div class="[ xmall-8 ][ inline-block align-middle ]">
								<nav class="[ text-right ][ uppercase ]">
									<a href="<?php echo site_url(); ?>" class="[ button button--ink__intermediate ][ inline-block align-middle ][ <?php echo is_home() ? 'active' : ''; ?> ]">Inicio</a>
									<a href="<?php echo site_url('archivo'); ?>" class="[ button button--ink__intermediate ][ inline-block align-middle ][ <?php echo get_post_type() == 'archivo' ? 'active' : ''; ?> ]">Foto</a>
									<a href="<?php echo site_url('videos'); ?>" class="[ button button--ink__intermediate ][ inline-block align-middle ][ <?php echo get_post_type() == 'videos' ? 'active' : ''; ?> ]">Video</a>
									<a href="<?php echo site_url('talleres'); ?>" class="[ button button--ink__intermediate ][ inline-block align-middle ][ <?php echo get_post_type() == 'talleres' ? 'active' : ''; ?> ]">Talleres</a>
									<a href="<?php echo site_url('editorial'); ?>" class="[ button button--ink__intermediate ][ inline-block align-middle ][ <?php echo get_post_type() == 'editorial' ? 'active' : ''; ?> ]">Editorial</a>
								</nav>
							</div>
						</div>
						<hr class="[ divider ]">
					</div>
				</header>

			<?php endif; ?>

			<div <?php echo body_class('main'); ?>">