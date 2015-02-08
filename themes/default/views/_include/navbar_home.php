<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
	<div class="container topnav">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<span class="navbar-brand topnav"><img src="themes/default/img/nav-icon.png" /></span>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown" id="loginDropdown">
					<a href="#" id="navLogin" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i> Login</a>
					<!-- Login dropdown -->
					<div class="dropdown-menu">
						<form name="login" method="post" action="login" class="dropdown-form">
							<div class="form-group">
								<input name="username" class="form-control" placeholder="Username" type="text" /> 
								<input name="password" class="form-control" placeholder="Password" type="password" />
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
							<ul>
								<li><a class="registration-link" data-toggle="modal" data-target="#registerModal">Register</a></li>
								<li><a href="forgot-password">Forgot Password?</a></li>
							</ul>
						</form>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>