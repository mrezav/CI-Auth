<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('User');
		$this->load->library('form_validation', 'session');
	}

	public function index(){
		$this->load->view('login');
	}

	public function login_check(){
		$post = $this->input->post();

		$this->form_validation->set_message('required','%s belum diisi');
		$this->form_validation->set_message('valid_email','%s salah');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">','</div>');

		if($this->form_validation->run('login') == false){
			$this->load->view('login');
		}else{
			$email 		= $post['email'];
			$password 	= $post['password'];

			$result = $this->User->loginCheck($email,$password);
			$data_session = [
								'id' 			=> $result->id,
								'name'  		=> $result->name,
								'email' 		=> $result->email,
								'password' 		=> $result->password,
								'login_status' 	=> TRUE,
							];
			$this->session->set_userdata($data_session);
			redirect(site_url('dashboard'));
		}
	}

	public function email_check($email){
		$check = $this->User->emailCheck($email);
		if($check == false){
			$this->form_validation->set_message('email_check','%s tidak terdaftar!');
			return false;
		}else{
			return true;
		}
	}

	public function password_check($pass){
		$email 	= $this->input->post('email');
		$check 	= $this->User->loginCheck($email,$pass);
		if($check == false){
			$this->form_validation->set_message('password_check','%s salah!');
			return false;
		}else{
			return true;
		}
	}

	// Halaman ini tidak ada jika sudah proses produksi dengan mengirim link ke email user
	public function link_verify($token){
		$this->load->view('link_verify', ['token' => $token]);
	}
	
	public function change_password($token){
		$this->load->view('change_password', ['token' => $token]);
	}

	public function forgot_password(){
		$this->load->view('forgot');
	}

	public function send_email(){
		$post = $this->input->post();
		$email = $post['email'];

		$token = md5(uniqid(rand(), true));
		$this->User->createToken($email, ['token' => $token]);
			
		redirect('login/link_verify/'.$token);

		/*------------------------------------------------
		|	Berikut ini script untuk kebutuhan produksi
		|	Jika menggunakan email verifikasi untuk mengganti password
		*/
		// $check_email = $this->User->createToken($email, ['token' => $token]);
		// if($check_email){

		// 	//set up email
		// 	$config = array(
		// 		  'protocol' => 'smtp',
		// 		  'smtp_host' => 'smtp.gmail.com', //Ubah sesuai dengan host anda
		// 		  'smtp_crypto' => 'ssl',
		// 		  'smtp_port' => 465,
		// 		  'smtp_user' => '', // Ubah sesuai dengan email yang dipakai untuk mengirim konfirmasi
		// 		  'smtp_pass' => '', // ubah dengan password host anda
		// 		  'smtp_username' => 'Muhammad Reza', // Masukkan username SMTP anda
		// 		  'mailtype' => 'html',
		// 		  'charset' => 'iso-8859-1',
		// 		  'wordwrap' => TRUE
		// 	);
	
		// 	$message =  "
		// 				<html>
		// 				<head>
		// 				<title>Verification Code</title>
		// 				</head>
		// 				<body>
		// 				<h2>Thank you for Registering.</h2>
		// 				<p>Your Account:</p>
		// 				<p>Email: ".$email."</p>
		// 				<p>Please click the link below to activate your account.</p>
		// 				<h4><a href='".base_url()."login/change_password/".$token."'>Set Up New Password</a></h4>
		// 				</body>
		// 				</html>
		// 				";
	
		// 	$this->load->library('email', $config);
		// 	$this->email->set_newline("\r\n");
		// 	$this->email->from($config['smtp_user']);
		// 	$this->email->to($email);
		// 	$this->email->subject('Forgot Password');
		// 	$this->email->message($message);
			
		// 	//sending email
		// 	if($this->email->send()){
		// 		$this->session->set_flashdata('message','Silahkan cek email anda!');
		// 	}else{
		// 		$this->session->set_flashdata('message', 'Gagal kirim email veriikasi!');	
		// 	}
		// 	redirect('login/forgot_password');
		// }else{
		// 	$this->session->set_flashdata('message', 'Email tidak terdaftar!');	
		// 	redirect('login/forgot_password');
		// }
	}

	public function set_password(){
		$post = $this->input->post();

		$token 		= $post['token'];
		$password 	= $post['password'];
		$c_password = $post['c_password'];

		$this->form_validation->set_message('required','%s masih kosong, silahkan diisi');
		$this->form_validation->set_message('min_length','%s terlalu pendek');
		$this->form_validation->set_message('matches','%s tidak sama');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if($this->form_validation->run('change_pass') == FALSE){
			$this->load->view('change_password',['token' => $token]);
		}else{
			$data = array(
						'password' => password_hash($password , PASSWORD_DEFAULT)
					);
			$this->User->setPassword($token, $data);
			redirect(site_url('login'));
		}
	}
}
