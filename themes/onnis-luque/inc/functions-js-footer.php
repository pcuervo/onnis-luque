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



<?php  ?>
		</script>
<?php
	endif;
}// footer_scripts
?>