<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends MY_Controller {
	/**
	* Log a user into their account via AJAX
	*/
	public function login() {
		$result = array();
		if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password'), TRUE)) {
			// Login successful
			$result['success'] = TRUE;
			$result['message'] = $this->ion_auth->messages();
			// $this->session->set_flashdata('message', $this->ion_auth->messages());
		} else {
			// Login failed
			$result['success'] = FALSE;
			$result['message'] = $this->ion_auth->errors();
			// $this->session->set_flashdata('message', $this->ion_auth->errors());
		}
		echo json_encode($result);
	}

	/**
	* Create a user account via AJAX.
	*/
	public function register() {

	}
}