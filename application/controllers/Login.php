<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        
        parent::__construct();
        $this->load->model('login_model');
        
        
    }
     
	public function index()
	{
        
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_verify');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('login_view');
        }
        else
        {
            redirect('home','refresh');
        }
        
    }
    
    public function verify($pw)
    {        
        
        $username = $this->input->post('username');      
        
        $result=$this->login_model->login($username,$pw);
        
        if($result)
        {
            $session_array = array();
            foreach($result as $row){
                $session_array=array(
                    'id'=>$row->id,
                    'username'=>$row->username
                );
                $this->session->set_userdata('logged_in', $session_array);
            }
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('verify', 'Salah Username atau Password yeuh...!');
            return FALSE;
        }
        
    }
    
    
}
