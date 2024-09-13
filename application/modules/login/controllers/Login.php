<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Login extends MX_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Login_m');
		}

		public function index(){
			$this->load->view('login_v');
		}
	}