<?php
defined('BASEPATH') OR exit('No direct script allowed');

class User extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function storeUser($table, $data){
		$this->db->insert($table, $data);
		return true;
	}

	public function emailCheck($email){
		$this->db->where('email',$email);
		$result = $this->db->get('users')->row();
		if($result){
			return true;
		}else{
			return false;
		}
	}

	public function loginCheck($email,$pass){
		$this->db->where('email',$email);
		$row = $this->db->get('users')->row();
		if($row){
			$password_hash = $row->password;
			if(password_verify($pass,$password_hash) == true){
				return $row;
			}else{
				return false;
			}
		}
	}

	public function createToken($email, $data){
		$this->db->where('email', $email);
		$row = $this->db->get('users')->row();
		if($row){
			$this->db->update('users', $data);
			return true;
		}else{
			return false;
		}
	}

	public function setPassword($token, $data){
		$this->db->where('token', $token);
		$this->db->update('users', $data);
	}

}
