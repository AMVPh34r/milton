<?php
$this->load->view('_include/header');
$this->load->view('_include/navbar');
?>

<?php
$classes = array(
	'itcs' => array(
		array(
			'id' => 'ITCS 1101',
			'name' => 'Intro to Computer Science',
			'time' => 'MW 12:30PM-1:45PM',
			'location' => 'Woodward 110',
			'professor' => 'Worth',
			'prefs' => TRUE
		),
		array(
			'id' => 'ITCS 1101',
			'name' => 'Intro to Computer Science',
			'time' => 'MW 5:00PM-6:15PM',
			'location' => 'Atkins 126',
			'professor' => 'Smith',
			'prefs' => FALSE
		)
	),
);
?>

<?php
	if (isset($_GET['pg'])) {
		switch($_GET['pg']) {
			case 'empty':
				$img = 'class-empty.png';
				break;
			case 'event1':
				$img = 'class-event1.png';
				break;
			case 'event2':
				$img = 'class-event2.png';
				break;
			case 'events':
				$img = 'class-events.png';
				break;
			default:
				$img = 'class-empty.png';
				break;
		}
	} else {
		$img = 'class-empty.png';
	}
?>

<div class="schedule">
	<div id="wrapper">
		<?php $this->load->view('modules/schedule_sidebar'); ?>

		<div id="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h1>Add a Class</h1>
						<form method="post">
							<div class="row form-group">
								<label for="class-search-id">Class</label><br />
								<div class="col-lg-2">
									<select name="dept" class="form-control">
										<option>ITCS</option>
										<option>ITIS</option>
									</select>
								</div>
								<div class="col-lg-3">
									<input type="text" class="form-control" name="id" id="class-search-id" placeholder="1101">
								</div>
							</div>
							<div clas="row">
								<button class="btn btn-primary" id="run-search">Search</button>
							</div>
						</form>
					</div>

					<br /><br /><br />
					<div class="col-lg-12" id="results">
						<div class="row">
							<div class="col-lg-1">
								<b>Add</b>
							</div>
							<div class="col-lg-1">
								<b>Class ID</b>
							</div>
							<div class="col-lg-3">
								<b>Class Name</b>
							</div>
							<div class="col-lg-2">
								<b>Time</b>
							</div>
							<div class="col-lg-2">
								<b>Location</b>
							</div>
							<div class="col-lg-2">
								<b>Professor</b>
							</div>
							<div class="col-lg-1">
								<b>Reviews</b>
							</div>
						</div>
						<div class="row">
							<?php foreach($classes['itcs'] as $class): ?>
								<div class="col-lg-1">
									<?php
										if ($class['prefs'] === TRUE)
											echo '<button class="btn btn-success btn-xs add-class" title="Click to add this class to your schedule"><i class="fa fa-plus"></i></button>';
										else
											echo '<button class="btn btn-danger btn-xs add-class" title="This class does not meet your preferences"><i class="fa fa-plus"></i></button>';
									?>
								</div>
								<div class="col-lg-1">
									<?php echo $class['id']; ?>
								</div>
								<div class="col-lg-3">
									<?php echo $class['name']; ?>
								</div>
								<div class="col-lg-2">
									<?php echo $class['time']; ?>
								</div>
								<div class="col-lg-2">
									<?php echo $class['location']; ?>
								</div>
								<div class="col-lg-2">
									<?php echo $class['professor']; ?>
								</div>
								<div class="col-lg-1">
									<button class="btn btn-warning btn-sm">View</button>
								</div>
							<?php endforeach; ?>
						</div>
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

<script>
$(document).ready(function() {
	$('#results').hide();
});

$('#run-search').click(function(e) {
	e.preventDefault();
	$('#results').fadeIn();
});

$('.add-class').click(function(e) {
	window.location.href = "/schedule/show?cal=event1";
});
</script>

<?php $this->load->view('_include/html_footer'); ?>
