<?php $this->load->view('_include/header'); ?>

<div class="landing">
	<?php $this->load->view('_include/navbar'); ?>

	<!-- Header -->
	<header class="header parallax-bg">
		<div class="text-vertical-center">
			<h1>Milton Class Finder</h1>
			<h3>Some catchy subtitle</h3>
			<hr class="medium" />
			<button type="button" class="btn btn-light btn-lg registration-link" data-toggle="modal" data-target="#registerModal"><span class="button-label"><strong>Sign Up</strong></span></button>
			<!-- <button type="button" class="btn btn-dark btn-lg" data-toggle="dropdown" data-target="#loginDropdown"><span class="button-label">Login</span></button> -->
			<button type="button" class="btn btn-dark btn-lg login-link" data-toggle="modal" data-target="#loginModal"><span class="button-label"><strong>Login</strong></span></button>
		</div>
	</header>

	<!-- About -->
	<section class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>Find and organize your classes with ease</h2>
					<p class="lead">A few sentences introducing our service will go here. We will describe our target demographic and give a brief summary of our application and what it does.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- About -->
	<section class="feature parallax-bg">
		<div class="container text-vertical-center">
			<div class="row">
				<div class="col-xs-6 col-xs-offset-6 text-center bg-white">
					<h2>Get back to what really matters.</h2>
					<p class="lead">Less time spent hunting for the right classes and time slots means more time actually preparing for the upcoming semester, and more free time too!</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Services -->
	<section class="services bg-primary">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-10 col-md-offset-1">
					<h2>Our Services</h2>
					<hr class="small" />
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="service-item">
								<span class="fa-stack fa-4x">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-graduation-cap fa-stack-1x text-primary"></i>
								</span>
								<h4>
									<strong>Find Your Required Classes</strong>
								</h4>
								<p>Simply tell us your school and major, and we'll populate a list of what classes you need to take to graduate.</p>
								<a href="#" class="btn btn-light">Learn More</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="service-item">
								<span class="fa-stack fa-4x">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar fa-stack-1x text-primary"></i>
								</span>
								<h4>
									<strong>Make Your Schedule Yours</strong>
								</h4>
								<p>Prefer not to have class on Fridays? No problem! Our service takes your preferences into account when setting up your class schedule.</p>
								<a href="#" class="btn btn-light">Learn More</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="service-item">
								<span class="fa-stack fa-4x">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-users fa-stack-1x text-primary"></i>
								</span>
								<h4>
									<strong>Find the Best Classes</strong>
								</h4>
								<p>Your peers can leave comments and ratings on each class section, helping you to decide which is the best for you.</p>
								<a href="#" class="btn btn-light">Learn More</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="service-item">
									<span class="fa-stack fa-4x">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-university fa-stack-1x text-primary"></i>
								</span>
								<h4>
									<strong>Service Name</strong>
								</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<a href="#" class="btn btn-light">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Callout -->
	<section class="callout parallax-bg">
		<div class="text-vertical-center">
			<h1>Vertically Centered Text</h1>
		</div>
	</section>

	<?php $this->load->view('_include/footer'); ?>
</div>

<?php
$this->load->view('_include/scripts');

// Registration/login modals
$this->load->view('modules/register_modal');
$this->load->view('modules/login_modal');
?>

<script type="text/javascript">
	$('.modal').on('shown.bs.modal', function(e) {
		$(this).find('input')[0].focus();
	});
</script>

<?php
$this->load->view('_include/html_footer');
?>