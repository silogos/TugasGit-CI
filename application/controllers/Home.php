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
    
    function user()
	{
        $this->load->model('user_model');
        $data['user'] = $this->user_model->tampil()->result();
        
        $this->load->view('home/header');
        $this->load->view('home/user_view',$data);
        $this->load->view('home/footer');
                
    }
    
    function tambah_user()
	{
        
        $this->load->view('home/header');
        $this->load->view('home/user_view');
        $this->load->view('home/footer');
                
    }
    
    function edit_user()
	{
        $this->load->model('user_model');
        $data['user'] = $this->user_model->tampil()->result();
        
        $this->load->view('home/header');
        $this->load->view('home/user_view',$data);
        $this->load->view('home/footer');
                
    }
    
    function delete_user()
	{
        $this->load->model('user_model');
        $data['user'] = $this->user_model->tampil()->result();
        
        $this->load->view('home/header');
        $this->load->view('home/user_view',$data);
        $this->load->view('home/footer');
                
    }
    
    function bookmark()
	{
        $this->load->model('bookmark_model');
        $data['bookmark'] = $this->bookmark_model->tampil()->result();
        
        $this->load->view('home/header');
        $this->load->view('home/bookmark_view',$data);
        $this->load->view('home/footer');
                
    }
    
    function logout()
    {
        
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home','refresh');                
        
    }
    
}
