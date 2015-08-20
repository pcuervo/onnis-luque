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
		<meta name="application-name" content="Little Crow"/>
		<meta name="msapplication-TileColor" content="#009C9F" />
		<meta name="msapplication-TileImage" content="<?php echo THEMEPATH; ?>favicon/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="<?php echo THEMEPATH; ?>favicon/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="<?php echo THEMEPATH; ?>favicon/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="<?php echo THEMEPATH; ?>favicon/mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="<?php echo THEMEPATH; ?>favicon/mstile-310x310.png" />
		
		<!-- Google font(s) -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
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
			<!-- =================================================
			==== MOBILE MENU
			================================================== -->
			<header class="[ xmall-12 ][ padding-top-bottom--small ][ bg-light ][ drop-shadow ][ hidden--xlarge ]">
				<div class="[ wrapper ]">
					<div class="[ text-center color-light ]">
						<div class="[ bg-image-placeholder__wrapper bg-image-placeholder__wrapper__logo ][ no-margin ][ hidden--xlarge-inline ]">
							<a class="[ bg-image-placeholder bg-image-placeholder__logo ]" href="<?php echo site_url(); ?>"></a>
						</div>
					</div>
				</div>
			</header>
			<!-- =================================================
			==== DESKTOP MENU
			================================================== -->
			<header class="[ xmall-12 ][ shown--large ][ padding-top-bottom--small ]">
				<div class="[ wrapper ]">
					<div class="[ xmall-12 ][ inline-block align-middle ][ text-center ]">
						<nav class="[ text-center ]">
							<a href="<?php echo site_url(); ?>" class="[ button button--ink ][ inline-block align-middle ][ <?php echo is_home() ? 'active' : ''; ?> ]">Inicio</a>
							<a href="<?php echo site_url('archivo'); ?>" class="[ button button--ink ][ inline-block align-middle ][ <?php echo get_post_type() == 'archivo' ? 'active' : ''; ?> ]">Archivo</a>
							<a href="<?php echo site_url('talleres'); ?>" class="[ button button--ink ][ inline-block align-middle ][ <?php echo get_post_type() == 'talleres' ? 'active' : ''; ?> ]">Talleres</a>
							<a href="<?php echo site_url('editorial'); ?>" class="[ button button--ink ][ inline-block align-middle ][ <?php echo get_post_type() == 'editorial' ? 'active' : ''; ?> ]">Editorial</a>
						</nav><!-- categorias -->
					</div>
				</div>
			</header>
			<div class="[ main ]">
