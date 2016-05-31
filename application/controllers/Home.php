<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    
    private $sesi=array(); 
        
    public function __construct()
    {
        
        parent::__construct();
        
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->sesi = $session_data['username'];
        }
        else
        {
            redirect('login','refresh');
        }
        
    }
     
	function index()
	{
        $sesi['username']= $this->sesi;
        $this->load->view('templates/header', $sesi);
        $this->load->view('home/home_view');
        $this->load->view('templates/footer');
                
    }
    
    function user()
	{
        $sesi['username']= $this->sesi;
        $this->load->model('user_model');
        $data['user'] = $this->user_model->tampil('user',$sesi)->result();
        
        $this->load->view('templates/header', $sesi);
        $this->load->view('home/user_view',$data);
        $this->load->view('templates/footer_t');
                
    }
    
    function bookmark()
	{
        $sesi['username']= $this->sesi;

        $this->load->model('bookmark_model');
        $data['bookmark'] = $this->bookmark_model->tampil()->result();
        
        $this->load->view('templates/header', $sesi);
        $this->load->view('home/bookmark_view',$data);
        $this->load->view('templates/footer_t');
                
    }
    
    function logout()
    {
        
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home','refresh');                
        
    }
    
}
