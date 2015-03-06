<?php $this->load->view('_include/header'); ?>

<div class="schedule">
	<div id="wrapper">
		<?php $this->load->view('modules/schedule_sidebar'); ?>

		<div id="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h1><?php echo $this->oUser->first_name . ' ' . $this->oUser->last_name; ?>'s Schedule</h1>
						<p>User's schedule will appear here.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget dolor nec lorem congue scelerisque at eget erat. Etiam iaculis odio metus, vitae dictum sem sodales dictum. Cras consectetur ligula quis euismod ultricies. Nunc luctus sapien non congue ullamcorper. In nec egestas ante. Nulla nibh neque, scelerisque id lorem eget, convallis dictum nibh. Aliquam porta nulla sit amet velit auctor viverra. Praesent a tempor risus. Mauris fringilla facilisis libero sed suscipit.</p>
						<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
$this->load->view('_include/footer');
$this->load->view('_include/scripts');
$this->load->view('_include/html_footer');
?>
