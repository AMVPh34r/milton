<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	public function index() {
		// If user is logged in, redirect to their profile.
		// Otherwise redirect to login page.
		redirect('user/profile');
	}

	/**
	* Show a user's public profile.
	*
	* @param int $iUserID The ID of the user to show, default to current user.
	*/
	public function profile($iUserID=NULL) {
		$this->sPageTitle = "User Profile";
		$this->load->view('page');
	}

	/**
	* Show the user's settings page, or save modified settings.
	*/
	public function settings() {
		$this->sPageTitle = "User Settings";
		$this->load->view('page');
	}

	/**
	* Log a user into their account, or display the login page.
	*/
	public function login() {
		// Check if logging in from a form, if so go directly to login process.
		// Otherwise display login page.
		$this->sPageTitle = "Login";
		$this->load->view('page');
	}

	/**
	* Log a user out of their account.
	*/
	public function logout() {
		$this->sPageTitle = "Logout";
		$this->load->view('page');
	}
}
