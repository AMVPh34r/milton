<?php
$pref_form = <<<EOF
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
	<option>8:00 AM</option>
	<option>9:00 AM</option>
	<option>10:00 AM</option>
	<option>11:00 AM</option>
	<option>12:00 PM</option>
	<option>1:00 PM</option>
	<option>2:00 PM</option>
	<option>3:00 PM</option>
	<option>4:00 PM</option>
	<option>5:00 PM</option>
	<option>6:00 PM</option>
	<option>7:00 PM</option>
	<option>8:00 PM</option>
	<option>9:00 PM</option>

</select>
on
<select>
	<option>Sundays</option>
	<option>Mondays</option>
	<option>Tuesdays</option>
	<option>Wednesdays</option>
	<option>Thursdays</option>
	<option>Fridays</option>
	<option>Saturdays</option>
</select>
<br />
EOF;
?>


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
						<div id="pref-list">
						<?php echo $pref_form; ?>
						</div>
						<br /><br />
						<button class="btn btn-default" id="add-restriction">Add a Restriction</button>
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

<script>
$('#add-restriction').click(function(e) {
	$('#pref-list').append('<?php echo str_replace("\n","\\\n",str_replace("'","\\'",$pref_form)); ?>');
});
</script>
