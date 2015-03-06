<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends MY_Controller {
	public $oUser;

	public function __construct() {
		parent::__construct();

		// Redirect anonymous users to the login page
		if (!$this->ion_auth->logged_in()) {
			$this->session->set_flashdata('message', "You must be logged in to access that page.");
			redirect('user/login');
		}

		$this->oUser = $this->ion_auth->user()->row();
	}

	public function index() {
		$this->show();
	}

	/**
	* Display the current user's schedule.
	*/
	public function show() {
		$this->sPageTitle = "My Schedule";
		$this->load->view('pages/schedule');
	}

	/**
	* Allow the user to edit their schedule or class preferences.
	*/
	public function edit($section) {
		$this->sPageTitle = "Edit My Schedule";
		$this->load->view('page');
	}
}
