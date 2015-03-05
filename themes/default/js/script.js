$(document).ready(function () {
	$(document).on('shown.bs.modal', '.modal', function() {
		// Focus first input field when modals are shown
		$(this).find('input')[0].focus();
	}).on('click', '.registration-link', function() {
		$('#loginModal').modal('hide');
	});

	// Validate and submit user registration modal form
	$("#register-form").validate({
		submitHandler: function() {
			$('#register-button button').hide();
			$('#register-button #register-progress').fadeIn().removeClass('hidden');
			$.post('ajax/register',
				$('form#register-form').serialize(),
				function(data){
					if (data.success === true) {
						window.location.replace("/user/profile");
					} else {
						$('#register-button #register-progress').hide();
						$('#register-button button').fadeIn();
						$('#register-msg').html(data.message);
					}
				}, "json"
			);
		}
	});

	// Validate and submit user login modal form
	$("#login-form").validate({
		submitHandler: function() {
			$('#login-button button').hide();
			$('#login-button #login-progress').fadeIn().removeClass('hidden');
			$.post('/ajax/login',
				$('form#login-form').serialize(),
				function(data) {
					if (data.success === true) {
						window.location.replace("/schedule");
					} else {
						$('#login-button #login-progress').hide();
						$('#login-button button').fadeIn();
						$('#login-msg').html(data.message);
					}
				}, "json"
			);
		}
	});
});