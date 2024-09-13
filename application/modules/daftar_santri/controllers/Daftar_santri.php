<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Daftar_santri extends MX_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Daftar_santri_m');
		}

		public function index(){
			$this->load->view('daftar_santri_v');
		}
	}