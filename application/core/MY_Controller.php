<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('User');
		$this->load->library(array('form_validation','Mylib','session'));
		$this->mylib->logged_in();
	}

}
