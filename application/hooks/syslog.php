<?php

class Syslog_hook {
	private $CI;

	public function __construct() {
		$this->CI =& get_instance();

		$this->CI->load->model('syslog');
	}

	/**
	* Log a system event to the database.
	*/
	public function log_event() {
		$this->CI->syslog->log_event('page');
	}
}