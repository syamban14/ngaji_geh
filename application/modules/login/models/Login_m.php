<?php 
    class Login_m extends MX_Controller{
        function __construct(){
            parent::__construct();
            $this->db  = $this->load->database('default', TRUE);
        }

        public function auth($username, $password)
        {
            return $this->db->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
        }
    }