<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {
    
        public function index()
        {
            $data['title'] = "Home";
            $data['content'] = $this->load->view('Users/Home');
            $this->load->view('template', $data);
        }
    
    }
    
    /* End of file Home.php */
    
?>