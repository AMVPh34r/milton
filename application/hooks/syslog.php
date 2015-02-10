<?php

class Syslog_hook {
	private $CI;

	public function __construct() {
		$this->CI =& get_instance();
	}

	/**
	* Log a system event to the database.
	*/
	public function log_event() {
		if ($this->CI->bPageError === FALSE) {
			$this->CI->syslog->log_event('page');
		}
	}
}