<?php
$this->load->view('_include/header');
$this->load->view('_include/navbar');
?>
<div class="content">
	Sample page for testing controllers.<br />
	Page title: <strong><?php echo $this->sPageTitle; ?></strong>
</div>
<?php
$this->load->view('_include/scripts');
$this->load->view('modules/login_modal');
$this->load->view('_include/html_footer');
?>