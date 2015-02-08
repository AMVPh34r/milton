<?php $this->load->view('_include/header'); ?>

<div class="landing parallax">
	<?php $this->load->view('_include/navbar_home'); ?>

	<!-- Header -->
	<header class="header parallax-group">
		<div class="text-vertical-center parallax-layer parallax-layer-base">
			<h1>Site Title</h1>
			<h3>Some catchy subtitle</h3>
			<hr class="divider" />
			<button type="button" class="btn btn-light btn-lg registration-link" data-toggle="modal" data-target="#registerModal"><span class="button-label"><strong>Sign Up</strong></span></button>
			<button type="button" class="btn btn-dark btn-lg" data-toggle="dropdown" data-target="#loginDropdown"><span class="button-label">Login</span></button>
			<!-- <a href="login" class="btn btn-dark btn-lg"><span class="button-label">Login</span></a> -->
		</div>
		<div class="parallax-layer parallax-layer-back">
			<img src="themes/default/img/header-bg.jpg" class="slide-bg"/>
		</div>
	</header>

	<div class="parallax-group foreground">
		<div class="parallax-layer parallax-layer-base">
			<!-- About -->
			<section  class="about bg-white">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
							<p class="lead">Maecenas faucibus lorem eget orci volutpat, sit amet condimentum nisl laoreet. Maecenas rutrum egestas sapien eu sollicitudin. Ut faucibus arcu id turpis sollicitudin accumsan.</p>
						</div>
					</div>
				</div>
			</section>

			<!-- Services -->
			<section class="services bg-primary">
				<div class="container">
					<div class="row text-center">
						<div class="col-lg-10 col-lg-offset-1">
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
		</div>
	</div>

	<!-- Callout -->
	<section class="callout parallax-group">
		<div class="parallax-layer parallax-layer-base">
			<div class="text-vertical-center">
				<h1>Vertically Centered Text</h1>
			</div>
			<?php $this->load->view('_include/footer'); ?>
		</div>
		<div class="parallax-layer parallax-layer-back">
			<img src="themes/default/img/callout-bg.jpg" class="slide-bg" />
		</div>
	</section>
</div>

<?php
// Registration modal
$this->load->view('_include/register_modal');

$this->load->view('_include/scripts');
?>

<script type="text/javascript">
	$('#loginDropdown').on('shown.bs.dropdown', function(e) {
		$(this).find('input:nth-child(1)').focus();
	});

	$('.nav .registration-link').click(function(e) {
		$(this).parents('.dropdown').removeClass('open');
	});
</script>

<?php
$this->load->view('_include/html_footer');
?>