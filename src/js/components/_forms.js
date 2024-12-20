document.addEventListener("DOMContentLoaded", function() {

	const 	$ = jQuery.noConflict();

	setTimeout(function() {
		$('.acf-form-sent').text('');
		if ( $('.acf-form-sent').hasClass('acf-form-sent') ) {
			history.replaceState(null, null, ' ');
		}
	}, 2000);

	/* Phone / Numbers & + only Validation */
	$('form input[type=tel],input[type=number],form input[type=range],form input[type=time]').on('input propertychange', function (e) {
		e.target.value = e.target.value.replace(/[a-zA-Z]/g,'');
		return false;
	});

	/* Name / Text only Validation */
	$('form input[type=text]').on('input propertychange', function (e) {
		e.target.value = e.target.value.replace(/[0-9]/g,'');
		return false;
	});

});