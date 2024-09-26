<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Home extends MX_Controller{
		function __construct(){
			// parent::__construct();
			$this->load->model('Home_m');
			// if($this->session->userdata('logged_in')!=TRUE)
	  //       {
	  //       	redirect('login','refresh');
	  //       }
		}

		public function index(){

			public function index(){
			$this->load->view('commons/header');
			$this->load->view('home_v');
			$this->load->view('commons/footer');
		}
			// if ($this->session->userdata('role')=='murid') {
			// 	$this->load->view('home_v');
			// }elseif ($this->session->userdata('role')=='ustadz') {
			// 	$this->load->view('home_ustadz_v');
			// }
		}
	}
