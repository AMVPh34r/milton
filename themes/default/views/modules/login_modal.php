<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form class="form-horizontal" name="login" id="login-form" method="post" action="user/login">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="loginModalLabel">Login</h4>
				</div>
				<div class="modal-body">
					<input id="login-email" name="email" class="form-control" placeholder="Email Address" type="email" required />
					<input id="login-password" name="password" class="form-control" placeholder="Password" type="password" required />
				</div>
				<div class="modal-footer">
					<div class="login-msg col-lg-3 col-lg-offset-7"></div>
					<div class="login-button btn btn-primary col-lg-2">
						<span class="progress hidden"><i class="fa fa-refresh fa-spin fa-2x"></i></span>
						<button type="submit">Login</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function () {
	$("#login-form").validate({
		submitHandler: function() {
			$('.login-button button').hide();
			$('.login-button progress').fadeIn().removeClass('hidden');
			$.post('/ajax/login',
				$('form#login-form').serialize(),
				function(data) {
					if (data.success === true) {
						window.location.replace("/schedule");
					} else {
						$('.login-button progress').hide();
						$('.login-button button').fadeIn();
						$('.login-msg').html(data.message);
					}
				}, "json"
			);
		}
	});
});
</script>