<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('index');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('/'));
	}

}
