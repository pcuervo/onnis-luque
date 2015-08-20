var $=jQuery.noConflict();

/*------------------------------------*\
	#GENERAL FUNCTIONS
\*------------------------------------*/

/**
 * This is an example description
 * @param type name
 * @return type name
**/
function exampleFunction( ){
	
}// exampleFunction



/*------------------------------------*\
	#GET / SET FUNCTIONS
\*------------------------------------*/

/**
 * Show HTML if contact form was sent succesfully.
 * @param string message
 * @return successHTML
**/
function getContactSuccessHTML( message ){
	return '<h4 class="[ text-center ][ color-light text-shadow ]">' + message + '</h4>';
}// getContactSuccessHTML

/**
 * Show HTML if contact form was not sent succesfully.
 * @param string message
 * @return errorHTML
**/
function getContactErrorHTML( message ){
	return '<p>' + message + '</p>';
}// showContactErrorHTML





/*------------------------------------*\
	#AJAX FUNCTIONS
\*------------------------------------*/

/**
 * Send email requesting more information.
 * @param elemnt form
 */
function sendContactEmail( form ){

	var data = $( form ).serialize();
	$.post(
		ajax_url,
		data,
		function( response ){
			var jsonResponse = $.parseJSON( response );

			if( jsonResponse.error === 1) {
				showContactErrorHTML( jsonResponse.message );
				return;
			}

			$( form ).append( getContactSuccessHTML( jsonResponse.message ) );
		}
	);

}// sendContactEmail



