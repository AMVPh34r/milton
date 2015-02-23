<?php
$this->load->view('_include/header');
$this->load->view('_include/navbar');

$sMessage = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

$aFormData = array(
	'username' => array(
		'name' => 'username',
		'id' => 'username',
		'type' => 'text',
		'value' => $this->form_validation->set_value('username')
	),
	'password' => array(
		'name' => 'password',
		'id' => 'password',
		'type' => 'password'
	)
);
?>

<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $sMessage;?></div>

<?php echo form_open("user/login");?>
	<p>
		<?php echo lang('login_identity_label', 'username');?>
		<?php echo form_input($aFormData['username']);?>
	</p>

	<p>
		<?php echo lang('login_password_label', 'password');?>
		<?php echo form_input($aFormData['password']);?>
	</p>
  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>

<?php
$this->load->view('_include/scripts');
$this->load->view('modules/login_modal');
$this->load->view('_include/html_footer');
?>