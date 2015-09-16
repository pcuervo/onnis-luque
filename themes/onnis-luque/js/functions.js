var $=jQuery.noConflict();

/*------------------------------------*\
	#GENERAL FUNCTIONS
\*------------------------------------*/

/**
 * Run Validation plugin
 * @form to validate
**/
function runValidation(form){
	$(form).validate({
		submitHandler:function(){
			switch(form){
				case '.js-contact-form':
					sendContactEmail( form );
					break;
				default:
					$(form).submit();
			}
		}
	});
}

/**
 * Converts images to SVG
**/
function imgToSvg(){
	$('img.svg').each(function(){
		var $img = jQuery(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');

		jQuery.get(imgURL, function(data) {
			// Get the SVG tag, ignore the rest
			var $svg = jQuery(data).find('svg');

			// Add replaced image's ID to the new SVG
			if(typeof imgID !== 'undefined') {
				$svg = $svg.attr('id', imgID);
			}
			// Add replaced image's classes to the new SVG
			if(typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass+' replaced-svg');
			}

			// Remove any invalid XML tags as per http://validator.w3.org
			$svg = $svg.removeAttr('xmlns:a');

			// Replace image with new SVG
			$img.replaceWith($svg);

		}, 'xml');

	});
} //imgToSvg

/**
 * Opens Modal
 * @param element to be shown
**/
function openModal(element){
	$(element).removeClass('hide');
	$('body').css('overflow', 'hidden');
}//openModal

/**
 * Closes Modal
**/
function closeModal(){
	$('.modal-wrapper').addClass('hide');
	$('body').css('overflow', 'visible');
}//closeModal




/*------------------------------------*\
	#GET / SET FUNCTIONS
\*------------------------------------*/

/**
 * Show HTML if contact form was sent succesfully.
 * @param string message
 * @return successHTML
**/
function getContactSuccessHTML( message ){
	return '<h4 class="[ text-center ]">' + message + '</h4>';
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
			console.log( response );
			var jsonResponse = $.parseJSON( response );
			$( form ).empty();

			if( jsonResponse.error === 1) {
				$( form ).append( getContactErrorHTML( jsonResponse.message ) );
				return;
			}

			$( form ).append( getContactSuccessHTML( jsonResponse.message ) );
		}
	);

}// sendContactEmail



