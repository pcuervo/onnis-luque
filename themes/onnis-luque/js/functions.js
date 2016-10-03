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

/**
 * Toggles Menu
 * @param element to be shown
**/
function toggleMenu(element){
	$(element).toggleClass('hide');

	var menuHeight = getMenuHeight();
	$('header').not('header.scrolled').css('top:', menuHeight);
}//openModal




/*------------------------------------*\
	#GET / SET FUNCTIONS
\*------------------------------------*/

/**
 * Get header's height
 */
function getHeaderHeight(){
	return $('header').not('header.scrolled').outerHeight();
}// getHeaderHeight

/**
 * Get footer's height
 */
function getFooterHeight(){
	return $('footer').outerHeight();
}// getFooterHeight

/**
 * Get header's height
 */
function getMenuHeight(){
	return $('.menu-nav').outerHeight();
}// getMenuHeight

/**
 * Get the scrolled pixels in Y axis
 */
function getScrollY() {
	return $(window).scrollTop();
}// getScrollY

/**
 * Set conainer's padding bottom
 */
function setContainerPaddingBottom(){
	var footerHeight = getFooterHeight();
	footerHeight = footerHeight;
	$('.main').css('padding-bottom', footerHeight );
}// setContainerPaddingBottom

/**
 * Set main's padding top
 */
function setMainPaddingTop(){
	var headerHeight = getHeaderHeight();
	var sy = getScrollY();
	$('.main').not('.main.home').css('padding-top', headerHeight + 20);
	$('.main.post-type-archive-archivo, .main.single-archivo, .main.single-videos, .main.single-editorial').css('padding-top', headerHeight);
}// setMainPaddingTop

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
	#TOGGLE FUNCTIONS
\*------------------------------------*/


/**
 * Toggle Header
 */
 function toggleHeader(){
	var headerHeight = getHeaderHeight();
	var sy = getScrollY();

	if ( sy >= 10 ) {
		$('header.scrolled').removeClass('hide');
		$('header').not('header.scrolled, header.header-not-home').addClass('hide');
	} else {
		$('header.scrolled').addClass('hide');
		$('header').not('header.scrolled, header.header-not-home').removeClass('hide');
	}
}// toggleHeader


//Toggle Modal and run cycle
function toggleModalGallery( imagenNumber ){
	if ( $('.modal-archivo, .modal-editorial').hasClass('hide') ){

		$('.modal-archivo, .modal-editorial').removeClass('hide');
		$('.slideshow').cycle({
			slides 			: '.image-single',
			fx 				: 'scrollHorz',
			swipe 			: true,
			timeout 		: 0,
			centerHorz 		: true,
			centerVert 		: true,
			log 			: true,
			startingSlide 	: imagenNumber,
			next 			: '.cycle-next',
			prev 			: '.cycle-prev',
			autoHeight 		: 'calc'
		});
	} else {
		destroyCycle();
		$('.modal-archivo, .modal-editorial').addClass('hide');
		$('body').css('overflow', 'visible');
	}

}

//Toggle Modal
function toggleModal(modal){

	console.log(modal);

	if ( modal.hasClass('hide') ){
		modal.removeClass('hide');
	} else {
		modal.addClass('hide');
		$('body').css('overflow', 'visible');
	}
}

function destroyCycle(){
	$('.slideshow').each(function(){
		$(this).cycle('destroy');
	});
}

$(document).on('keydown', function(e) {
	//e.preventDefault();
	if(e.which == 37) { // left
		$('.slideshow').cycle('prev');
	} else if(e.which == 39) { // right
		$('.slideshow').cycle('next');
	}
});



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

if (document.getElementById("filters_h")) {


	$( "#filters_h select" ).change(function() {
	   	var str = site_url+"/archivo/?";
	   	$( "#filters_h select option:selected" ).each(function() {
	   		var count = 1;
	   	 	var value = $( this ).attr('value');
	   	 	var variable = $( this ).data('variable');
	   	 	str += variable+'='+value;
	   	 	if (count < 5) {
	   	 		str += '&';
	   	 	};
	   	 	count = 1 + count;


	   	});

	   	window.location = str;

	});

}

if (document.getElementById("single_video")) {

	$('#single_video div iframe').attr('with', '200');

}
