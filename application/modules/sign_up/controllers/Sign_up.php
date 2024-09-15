<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Sign_up extends MX_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Sign_up_m');
		}

		public function index(){
			$this->load->view('sign_up_v');
		}
	}