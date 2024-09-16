<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Mengaji extends MX_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Mengaji_m');
		}

		public function index(){
			$this->load->view('mengaji_v');
		}
	}