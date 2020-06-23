<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
	'login' => array(
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|valid_email|callback_email_check'
		),
		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|callback_password_check'
		),
	),
	'register' => array(
		array(
			'field' => 'name',
			'label' => 'Name',
			'rules' => 'required|min_length[3]'
		),
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|valid_email|callback_email_check'
		),
		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|min_length[6]'
		),
		array(
			'field' => 'captcha',
			'label' => 'Captcha',
			'rules' => 'required|callback_cek_captcha'
		),
	),
    'change_pass' => array(
        array(
            'field' => 'password',
            'label' => 'Password baru',
            'rules' => 'required|min_length[6]'
        ),
        array(
            'field' => 'c_password',
            'label' => 'Konfirmasi password',
            'rules' => 'required|matches[password]'
        )
    ),
);
