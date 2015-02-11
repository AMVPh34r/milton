<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends MY_Controller {
	public function index() {
		$this->show();
	}

	/**
	* Display the current user's schedule.
	*/
	public function show() {
		$this->sPageTitle = "My Schedule";
		$this->load->view('page');
	}

	/**
	* Allow the user to edit their schedule or class preferences.
	*/
	public function edit($section) {
		$this->sPageTitle = "Edit My Schedule";
		$this->load->view('page');
	}
}
