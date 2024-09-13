<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Home_ustadz extends MX_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Home_ustadz_m');
		}

		public function index(){
			$this->load->view('commons/header');
			$this->load->view('home_ustadz_v');
			$this->load->view('commons/footer');
		}
	}