<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    function __construct()
    {
        
        parent::__construct();
        
        if($this->session->userdata('logged_in'))
        {
            
        }
        else
        {
            redirect('login','refresh');
        }
        
    }
     
	function index()
	{
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        
        $this->load->view('home/header', $data);
        $this->load->view('home/home_view', $data);
        $this->load->view('home/footer', $data);
                
    }
    
    function logout()
    {
        
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home','refresh');                
        
    }
    
}
