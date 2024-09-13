<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Cari_ustadz extends MX_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Cari_ustadz_m');
		}

		public function index(){
			$this->load->view('cari_ustadz_v');
		}
	}