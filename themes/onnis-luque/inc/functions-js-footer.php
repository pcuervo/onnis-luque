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

			/**
			 * Triggered events
			**/

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

				$('.js-contact-form').on('submit', function(e){
					e.preventDefault();

					sendContactEmail( $(this) );
				});
			
			<?php endif; ?>

			

<?php  ?>
		</script>
<?php
	endif;
}// footer_scripts
?>