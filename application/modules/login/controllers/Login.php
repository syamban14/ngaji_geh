<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Login extends MX_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Login_m');
		}

		public function index(){
			if($this->session->userdata('logged_in')==TRUE){
				redirect('/home'); 
			}else{
				$this->load->view('login_v');
			}
		}

		public function auth()
		{
			$username = htmlspecialchars($this->input->post('username'));
			$password = sha1(htmlspecialchars($this->input->post('password')));

			$auth = $this->Login_m->auth($username, $password);
			if ($auth->num_rows() > 0) {
				$session_data = [
	                'id' => $auth->row()->userId,
	                'username' => $auth->row()->username,
	                'nama' => $auth->row()->nama,
	                'email' => $auth->row()->email,
	                'role' => $auth->row()->role,
	                'logged_in' => TRUE
	            ];
	            $this->session->set_userdata($session_data);
				echo "OK";
			}else{
				echo "NO";
			}
		}

		public function logout()
		{
			$this->session->sess_destroy();
        	redirect('login');
		}
	}