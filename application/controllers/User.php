<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	public function index() {
		// If user is logged in, redirect to their profile.
		// Otherwise redirect to login page.
		if (!$this->ion_auth->logged_in()) {
			redirect('user/login');
		} else {
			redirect('user/profile');
		}
	}

	/**
	* Show a user's public profile.
	*
	* @param int $iUserID The ID of the user to show, default to current user.
	*/
	public function profile($iUserID=NULL) {
		if (!$this->ion_auth->logged_in()) {
			redirect('user/login');
		}

		if ($iUserID === NULL) {
			$oUser = $this->ion_auth->user()->row();
		} else {
			$oUser = $this->ion_auth->user($iUserID)->row()->id;
		}

		$this->sPageTitle = "User Profile: " . $oUser->username;
		$this->load->view('page');
	}

	/**
	* Show the user's settings page, or save modified settings.
	*/
	public function settings() {
		if (!$this->ion_auth->logged_in()) {
			redirect('user/login');
		}

		$oUser = $this->ion_auth->user()->row();

		$this->sPageTitle = "User Settings: " . $oUser->username;
		$this->load->view('page');
	}

	/**
	* Log a user into their account, or display the login page.
	*/
	public function login() {
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === TRUE) {
			if ($this->ion_auth->login($this->input->post('username'), $this->input->post('password'), TRUE)) {
				// Login successful, redirect to homepage
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				$this->syslog->log_event('user', 'Logged in');
				redirect('/', 'refresh');
			} else {
				// Login unsuccessful, redirect to login page
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				$this->syslog->log_event('user', 'Failed login attempt');
				redirect('user/login', 'refresh');
			}
		} else {
			// No login form submitted, display login page
			$this->sPageTitle = "Login";
			$this->load->view('pages/login');
		}
	}

	/**
	* Log a user out of their account.
	*/
	public function logout() {
		$this->sPageTitle = "Logout";

		$this->syslog->log_event('user', 'Logged out');
		$this->ion_auth->logout();
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect('/', 'refresh');
	}
}
