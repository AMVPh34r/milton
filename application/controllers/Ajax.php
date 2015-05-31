<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends MY_Controller {
	public function __construct() {
		parent::__construct();

		// While not an actual error, set this to TRUE to disable logging visits to this controller.
		// TODO get a better way to do this.
		$this->bPageError = TRUE;
	}

	/**
	* Log a user into their account via AJAX
	*/
	public function login() {
		$aResponse = array();
		if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password'), TRUE)) {
			// Login successful
			$aResponse['success'] = TRUE;
			$aResponse['message'] = $this->ion_auth->messages();
			$this->syslog->log_event('user', 'Logged in');
		} else {
			// Login failed
			$aResponse['success'] = FALSE;
			$aResponse['message'] = $this->ion_auth->errors();
			$this->syslog->log_event('user', 'Failed login attempt');
		}
		echo json_encode($aResponse);
	}

	/**
	* Create a user account via AJAX.
	*/
	public function register() {
		$aResponse = array();
		$sFirstName = $this->input->post('name')['first'];
		$sLastName = $this->input->post('name')['last'];
		$sEmail = $this->input->post('email');
		// TODO Link school and major to their IDs in the respective db tables.
		// Must first build school and major tables
		$iSchool = 0;
		$iMajor = 0;
		$sUsername = $this->input->post('username');
		$sPassword = $this->input->post('password');
		$sPasswordConf = $this->input->post('password-confirm');
		$aData = array(
			'first_name' => $sFirstName,
			'last_name' => $sLastName
			// 'school' => $iSchool,
			// 'major' => $iMajor
		);

		if ($sPassword !== $sPasswordConf) {
			// Passwords did not match
			$aResponse['success'] = FALSE;
			$aResponse['message'] = "Passwords must match";
			$this->syslog->log_event('user', 'Failed registration attempt');
		} else if ($this->ion_auth->register($sUsername, $sPassword, $sEmail, $aData)) {
			// Registration successful, log user in
			$aResponse['success'] = TRUE;
			$aResponse['message'] = $this->ion_auth->messages();
			$this->ion_auth->login($sEmail, $sPassword);
			$this->syslog->log_event('user', 'Registered new account');
		} else {
			// Registration failed
			$aResponse['success'] = FALSE;
			$aResponse['message'] = $this->ion_auth->errors();
			$this->syslog->log_event('user', 'Failed registration attempt');
		}
		echo json_encode($aResponse);
	}
}