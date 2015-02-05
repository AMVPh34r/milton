<?php

/**
* @name MY_Loader.php
* @version 1.0
* @author Alex Schaeffer
*/
class MY_Loader extends CI_Loader {
    public function __construct() {
        parent::__construct();
    }

    public function set_ci_view_paths($path) {
        $this->_ci_view_paths = array($path => TRUE);
    }
}  