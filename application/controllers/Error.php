<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends MY_Controller {
	public function __construct() {
		parent::__construct();

		$this->bPageError = TRUE;
	}

	public function index() {
		redirect('home');
	}

	public function not_found() {
		$this->sPageTitle = "404";
		echo "Page not found";

		$this->syslog->log_event('page_not_found');
	}
}
