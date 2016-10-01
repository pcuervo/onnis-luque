<?php

/**
* Here we add all the javascript that needs to be run on the footer.
**/
function footer_scripts(){
	global $post;

	if( wp_script_is( 'functions', 'done' ) ) :

?>
		<script type="text/javascript">

			/*------------------------------------*\
				#TALLERES / EDITORIAL
			\*------------------------------------*/
			<?php if( is_post_type_archive('talleres') OR is_post_type_archive('editorial')  ) : ?>

				$('.js-modal-toggler').on('click', function(e){
					e.preventDefault();
					toggleModal( $(this).closest('.modal-taller') );
				});

			<?php endif; ?>

			/*------------------------------------*\
				#SINGLE ARCHIVO
			\*------------------------------------*/
			<?php if( is_singular('archivo') OR is_post_type_archive('editorial')) : ?>

				/**
				 * On load
				**/
				$('.js-gallery').imagesLoaded( function() {
					$('.js-gallery').removeWhitespace().collagePlus(
						{
							'allowPartialLastRow' : false
						}
					);
				});

				/**
				 * Triggered events
				**/
				$('.js-gallery-item, .js-editorial-cover').on('click', function(e){
					e.preventDefault();
					var imagenNumber = $(this).data('number');
					toggleModalGallery(imagenNumber);
					$('body').css({'overflow': 'hidden'});
				});

				$('.js-gallery-toggler').on('click', function(e){
					e.preventDefault();
					toggleModalGallery(0);
				});

				$('.slideshow').on('cycle-update-view', function (e, optionHash, slideOptionsHash, currSlideEl) {
					var caption = (optionHash.currSlide + 1) + ' / ' + optionHash.slideCount;
					$('.cycle-info').html(caption);
				});


				$( window ).resize(function() {
					$('.js-gallery').collagePlus(
						{
							'allowPartialLastRow' : false
						}
					);
				});



			<?php endif; ?>

			/*------------------------------------*\
				#GLOBAL
			\*------------------------------------*/

			/**
			 * On load
			**/

			imgToSvg();
			toggleHeader();
			setMainPaddingTop();
			setContainerPaddingBottom();

			/**
			 * Triggered events
			**/

			$(window).scroll(function(){
				toggleHeader();
				setContainerPaddingBottom();
			});

			$(window).resize(function(){
				toggleHeader();
				setContainerPaddingBottom();
				setMainPaddingTop();
			});

			$('.js-modal-opener').on('click', function(e){
				e.preventDefault();
				var modal = $(this).data('modal');
				var modal = '.modal-'+modal;
				openModal(modal);
			});

			$('.js-modal-closer').on('click', function(e){
				e.preventDefault();
				closeModal();
			});


			$('.js-menu-toggler').on('click', function(e){
				e.preventDefault();
				var menu = $(this).data('menu');
				var menu = '.menu-'+menu;
				toggleMenu(menu);
			});

			/*------------------------------------*\
				#HOME
			\*------------------------------------*/
			<?php if( is_home() ) : ?>

				/**
				 * On load
				**/

				/**
				 * Triggered events
				**/
				runValidation('.js-contact-form');
				// $('.js-contact-form').on('submit', function(e){
				// 	e.preventDefault();

				// 	sendContactEmail( $(this) );
				// });

			<?php endif; ?>


			/*------------------------------------*\
				#SINGLE ARCHIVO
			\*------------------------------------*/




			/*------------------------------------*\
				#SINGLE VIDEO
			\*------------------------------------*/
			<?php if( is_singular('videos') ) : ?>

				/**
				 * On load
				**/
				$('.video-container').fitVids();


				/**
				 * Triggered events
				**/



			<?php endif; ?>

		</script>
<?php
	endif;
}// footer_scripts
?>