<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form class="form-horizontal" name="register" id="register-form" method="post" action="register">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="registerModalLabel">Register</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="register-fname" class="col-lg-3 control-label">Name:</label>
						<div class="col-lg-4">
							<input id="register-fname" name="name[first]" class="form-control" placeholder="John" type="text" required />
						</div>
						<div class="col-lg-4">
							<input id="register-lname" name="name[last]" class="form-control" placeholder="Smith" type="text" required />
						</div>
					</div>
					<div class="form-group">
						<label for="register-email" class="col-lg-3 control-label">University Email:</label>
						<div class="col-lg-4">
							<input id="register-email" name="email" class="form-control" placeholder="jsmith@school.edu" type="email" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">School:</label>
						<div class="col-lg-6">
							<!-- TODO auto-detect school based on entered email address -->
							<p class="form-control-static">University of North Carolina - Charlotte</p>
						</div>
					</div>
					<div class="form-group">
						<label for="register-major" class="col-lg-3 control-label">Major:</label>
						<div class="col-lg-6">
							<!-- TODO auto-populate options based on school -->
							<!-- TODO auto-complete as the user types -->
							<select id="register-major" name="major" class="form-control" required>
								<option value="" disabled selected>--Select One--</option>
								<optgroup label="Computer Science">
									<option>Computing Systems</option>
									<option>Game Design and Development</option>
									<option>Graphics and Visualization</option>
									<option>Intelligent Systems</option>
									<option>Networking and Distributed Computing</option>
								</optgroup>
								<optgroup label="Software and Information Systems">
									<option>Advanced Data and Knowledge Discovery</option>
									<option>Design Concentration</option>
									<option>Emerging Technologies</option>
									<option>Human-Computer Interaction</option>
									<option>Information Security and Privacy</option>
									<option>Information Technology Management</option>
									<option>Software Systems Design and Engineering</option>
									<option>Web Development</option>
								</optgroup>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="register-username" class="col-lg-3 control-label">Username:</label>
						<div class="col-lg-4">
							<input id="register-username" name="username" class="form-control" type="text" required />
						</div>
					</div>
					<div class="form-group">
						<label for="register-password" class="col-lg-3 control-label">Password:</label>
						<div class="col-lg-4">
							<input id="register-password" name="password" class="form-control" type="password" minlength="6" required />
						</div>
					</div>
					<div class="form-group">
						<label for="register-password-confirm" class="col-lg-3 control-label">Confirm Password:</label>
						<div class="col-lg-4">
							<input id="register-password-confirm" name="password-confirm" class="form-control" type="password" minlength="6" required />
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<input type="submit" class="btn btn-primary" value="Register" />
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function () {
	$("#register-form").validate({
		submitHandler: function() {
			$.post('ajax/register',
				$('form#register-form').serialize(),
				function(data){
					// TODO interpret the response (data) and act appropriately depending on registration success
				}, "json"
			);
		}
	});
});
</script>