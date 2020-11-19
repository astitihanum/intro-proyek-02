<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Users extends CI_Controller {
    
        public function index()
        {
            $data['title'] = "Home";
            $data['content'] = $this->load->view('Users/Home');
            $data['cssfile'] = "assets/css/home.css";
            $this->load->view('template', $data);
        }
        public function login()
        {
            $data['title'] = "Login";
            $data['content'] = $this->load->view('Users/Login');
            $data['cssfile'] = "assets/css/login.css";
            $this->load->view('template', $data);
        }
        public function register()
        {
            // register logic here
        }
    
    }
    
    /* End of file Home.php */
    
?>