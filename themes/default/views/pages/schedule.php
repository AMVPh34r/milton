<?php
$this->load->view('_include/header');
$this->load->view('_include/navbar');
?>

<div class="schedule">
	<div id="wrapper">
		<?php $this->load->view('modules/schedule_sidebar'); ?>

		<div id="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h1><?php echo $this->oUser->first_name . ' ' . $this->oUser->last_name; ?>'s Schedule</h1>
						<!-- <div class="row">
							<div class="col-lg-1">
								<div id="cal-sun"></div>
							</div>
							<div class="col-lg-1">
								<div id="cal-mon"></div>
							</div>
							<div class="col-lg-1">
								<div id="cal-tue"></div>
							</div>
							<div class="col-lg-1">
								<div id="cal-wed"></div>
							</div>
							<div class="col-lg-1">
								<div id="cal-thu"></div>
							</div>
							<div class="col-lg-1">
								<div id="cal-fri"></div>
							</div>
							<div class="col-lg-1">
								<div id="cal-sat"></div>
							</div>
						</div> -->
						<div id="calendar"></div>
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
?>

<script type="text/javascript">
	/*$('#cal-sun').calendar({
		tmpl_path: "/vendor/js/calendar/templates/",
		view: "day",
		day: "2015-04-19",
		events_source: function () { return []; }
	});
	$('#cal-mon').calendar({
		tmpl_path: "/vendor/js/calendar/templates/",
		view: "day",
		day: "2015-04-19",
		events_source: function () { return []; }
	});
	$('#cal-tue').calendar({
		tmpl_path: "/vendor/js/calendar/templates/",
		view: "day",
		day: "2015-04-19",
		events_source: function () { return []; }
	});
	$('#cal-wed').calendar({
		tmpl_path: "/vendor/js/calendar/templates/",
		view: "day",
		day: "2015-04-19",
		events_source: [
			{
				id: 1,
				title: "ITIS-3130",
				class: "event",
				start: "1429741800000",
				end: "1429751700000"
			}
		]
	});
	$('#cal-thu').calendar({
		tmpl_path: "/vendor/js/calendar/templates/",
		view: "day",
		day: "2015-04-19",
		events_source: function () { return []; }
	});
	$('#cal-fri').calendar({
		tmpl_path: "/vendor/js/calendar/templates/",
		view: "day",
		day: "2015-04-19",
		events_source: function () { return []; }
	});
	$('#cal-sat').calendar({
		tmpl_path: "/vendor/js/calendar/templates/",
		view: "day",
		day: "2015-04-19",
		events_source: function () { return []; }
	});*/

	var calendar = $("#calendar").calendar({
		tmpl_path: "/vendor/js/calendar/templates/",
		view: "week",
		events_source: [
			{
				id: 1,
				title: "ITIS-3130",
				class: "event",
				start: "1429741800000",
				end: "1429751700000"
			},
			{
				id: 2,
				title: "ITCS-2120",
				class: "event",
				start: "1429639200000",
				end: "1429643700000"
			},
			{
				id: 3,
				title: "ITCS-2120",
				class: "event",
				start: "1429812000000",
				end: "1429816500000"
			}
		]
	});
</script>

<?php $this->load->view('_include/html_footer'); ?>
