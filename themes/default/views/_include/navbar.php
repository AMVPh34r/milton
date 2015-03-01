<!-- Navbar -->
<nav class="navbar navbar-default topnav" role="navigation">
	<div class="container topnav">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<span class="navbar-brand topnav"><?php echo anchor(index_page(), '<img src="/themes/default/img/nav-icon.png" />'); ?></span>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown" id="loginDropdown">
				<?php if (!$this->ion_auth->logged_in()): ?>
					<a href="#" id="navLogin" data-toggle="modal" data-target="#loginModal" role="button"><i class="fa fa-user"></i> Login</a>
				<?php else: ?>
					<?php $user = $this->ion_auth->user()->row(); ?>
					<a href="#" id="navLogin" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i> <?php echo $user->first_name . ' ' . $user->last_name; ?></a>
					<!-- User dropdown -->
					<ul class="dropdown-menu">
						<li><a href="/schedule">My Schedule</a></li>
						<li><a href="/user/profile">Profile</a></li>
						<li><a href="/user/settings">Settings</a></li>
						<li><a href="/user/logout">Logout</a></li>
					</ul>
				<?php endif; ?>
				</li>
			</ul>
		</div>
	</div>
</nav>