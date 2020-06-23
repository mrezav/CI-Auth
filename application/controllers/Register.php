<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('User');
		$this->load->library('form_validation');
	}

	public function index(){
		$this->load->view('register');
	}

	public function submit(){

		$this->form_validation->set_message('required','%s belum diisi');
		$this->form_validation->set_message('valid_email','%s salah');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">','</div>');

		if($this->form_validation->run('register') == false){
			$this->load->view('register');
		}else{
			$post = $this->input->post();

			$data = array(
				'name' 		=> $post['name'],
				'email' 	=> $post['email'],
				'password' 	=> password_hash($post['password'], PASSWORD_BCRYPT)
			);

			$this->User->storeUser('users', $data);
			redirect(site_url('login'));
			
		}
	}

	public function email_check($email){
		$check = $this->User->emailCheck($email);
		if($check){
			$this->form_validation->set_message('email_check', '%s sudah digunakan!');
			return false;
		}else{
			return true;
		}
	}
	

}
