<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Users extends CI_Controller {
    
        public function index()
        {
            $data['title'] = "Home";
            $data['content'] = $this->load->view('Users/Home');
            $this->load->view('template', $data);
        }
        public function login()
        {
            //Login logic here
        }
        public function register()
        {
            // register logic here
        }
    
    }
    
    /* End of file Home.php */
    
?>