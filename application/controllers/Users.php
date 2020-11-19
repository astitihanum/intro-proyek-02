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
        public function handelHomebtn()
        {
            if($_POST["request"] === 'login'){
                redirect('login');
            } else if($_POST["request"] === 'register'){
                redirect('register');
            }  
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
            $data['title'] = "Login";
            $data['content'] = $this->load->view('Users/Register');
            $data['cssfile'] = "assets/css/login.css";
            $this->load->view('template', $data);
        }
    
    }
    
    /* End of file Home.php */
    
?>