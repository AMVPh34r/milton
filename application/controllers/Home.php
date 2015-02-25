<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function index() {
		if ($this->ion_auth->logged_in()) {
			redirect('schedule');
		}
		$this->sPageTitle = "Home";
		$this->load->view('pages/home');
	}
}
