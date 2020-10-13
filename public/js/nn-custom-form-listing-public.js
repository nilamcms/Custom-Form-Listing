(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	 $(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var full_name = $('#full_name').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		if(full_name!="" && email!="" && phone!=""){
			$.ajax({
				url: myAjax.ajaxurl,
				type: "POST",
				data: {

					action: "nn_create_custom_form",
					full_name: full_name,
					email: email,
					phone: phone
				},
				
				success: function(response){
					alert(response);
					
					if(response.trim() == 'true'){
						$("#butsave").removeAttr("disabled");
						$('#register_form').find('input:text').val('');
						$("#success").show();
						$('#success').html('Registration successful !'); 						
					}
					/*else if(dataResult.statusCode==201){
						$("#error").show();
						$('#error').html('Email ID already exists !');
					}*/
					
				}
			});
		}
		else{
			$("#error").show();
			$('#error').html('Please fill all the field !');
		}
	});

	});

})( jQuery );
