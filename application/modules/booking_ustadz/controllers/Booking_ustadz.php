<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Booking_ustadz extends MX_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Booking_ustadz_m');
		}

		public function index(){
			$this->load->view('booking_ustadz_v');
		}
	}