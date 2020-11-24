<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Users extends CI_Controller {
    
        public function index()
        {
            view('Users.index');
        }
        public function handleHomebtn()
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
        public function execlogin()
        {
            # code...
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
