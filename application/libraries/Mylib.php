<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mylib{
    public function __construct(){
           $this->CI =& get_instance();
    }   

	public function logged_in(){
		$this->CI->load->helper('url');
		if($this->CI->session->userdata('login_status') != true){
			redirect('login');
		}
	}
}
