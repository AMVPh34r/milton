<?php

class Syslog extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/**
	* Log a system event to the database.
	*
	* @param string $sType The event type (page, user, etc)
	* @param string $sMessage Optional. The message to attach to the log.
	* @param int $iUserID Optional. The ID of the user to log the event under.
	*/
	public function log_event($sType, $sMessage='', $iUserID=NULL) {
		if ($iUserID === NULL) {
			if ($this->ion_auth->logged_in()) {
				$iUserID = $this->ion_auth->user()->row()->id;
			} else {
				$iUserID = 0;
			}
		}

		// Get the user's hostname, accounting for any proxies
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$sHostname = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else
			$sHostname = $_SERVER['REMOTE_ADDR'];

		$aLogData = array(
			'user_id' 	=> $iUserID,
			'type' 		=> $sType,
			'message' 	=> $sMessage,
			'location' 	=> current_url(),
			'hostname' 	=> $sHostname,
			'timestamp' => time()
		);
		// If the user was referred from another URL, fetch it
		if (isset($_SERVER['HTTP_REFERER']))
			$aLogData['referrer'] = $_SERVER['HTTP_REFERER'];

		// Insert the event into the database
		$this->db->insert('syslog', $aLogData);
	}
}