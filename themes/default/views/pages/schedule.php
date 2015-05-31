<?php
	if (isset($_GET['cal'])) {
		switch($_GET['cal']) {
			case 'empty':
				$img = 'calendar-empty.png';
				break;
			case 'event1':
				$img = 'calendar-event1.png';
				break;
			case 'event2':
				$img = 'calendar-event2.png';
				break;
			case 'events':
				$img = 'calendar-events.png';
				break;
			default:
				$img = 'calendar-empty.png';
				break;
		}
	} else {
		$img = 'calendar-empty.png';
	}

	if (isset($_GET['pref'])) {
		echo '<div class="flash-message" style="background:green;padding-left:20%;color:white;">Preferences set</div>';
	}
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
						<h1><?php echo $this->oUser->first_name . ' ' . $this->oUser->last_name; ?>'s Schedule</h1>
						<?php echo img(array(
							'src'=>$this->sThemePath . 'img/scrn/' . $img,
							'style'=>'max-width:100%'
						)); ?>
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
