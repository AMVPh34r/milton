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
						<h1>Schedule Preferences</h1>
						<select>
							<option>I want classes</option>
							<option>I don't want classes</option>
						</select>
						<select>
							<option>starting</option>
							<option>ending</option>
						</select>
						<select>
							<option>before</option>
							<option>after</option>
						</select>
						<select>
							<?php foreach(array("8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM", "2:00 PM", "3:00 PM", "4:00 PM", "5:00 PM", "6:00 PM", "7:00 PM", "8:00 PM", "9:00 PM") as $i): ?>
							<option><?php echo $i; ?></option>
							<?php endforeach; ?>
						</select>
						on
						<select>
							<?php foreach(array("Sundays", "Mondays", "Tuesdays", "Wednesdays", "Thursdays", "Fridays", "Saturdays") as $i): ?>
							<option><?php echo $i; ?></option>
							<?php endforeach; ?>
						</select>
						<br /><br />
						<button class="btn btn-default">Add a Restriction</button>
						<br /><br />
						<div class="col-md-6 col-md-offset-6">
							<button class="btn btn-primary">Save Preferences</button>
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
$this->load->view('_include/html_footer');
?>


						