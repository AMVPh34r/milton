<?php

/**
* @name MY_Controller.php
* @version 1.0
* @author Alex Schaeffer
*/
class MY_Controller extends CI_Controller {

	public $sTheme = 'default';
	public $sThemePath = '';
	public $sPageTitle = '';
	public $oCurrUser = NULL;

	public $bPageError = FALSE;

	public function __construct() {
		parent::__construct();
		// Set the loader to use the default theme path.
		$this->setTheme($this->sTheme);

		// If user is logged in, set global current user object.
		if ($this->ion_auth->logged_in()) {
			$this->oCurrUser = $this->ion_auth->user()->row();
		}
	}

	/**
	 * Set the theme location. This is where the loader class will look for view files.
	 * @param string $sThemeName The name of the theme to set.
	 * @return void
	 */
	public function setTheme($sThemeName){
		$this->sTheme = $sThemeName;
		$this->sThemePath = 'themes/' . $this->sTheme . '/';
		$this->load->set_ci_view_paths(FCPATH . 'themes/' . $this->sTheme . '/views/');
	}
}  