<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        
        parent::__construct();
        if($this->session->userdata('logged_in'))
        {
        }
        
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
            $this->load->view('templates/header');
            $this->load->view('login');
            $this->load->view('templates/footer');
        }
        else
        {
            redirect('home','refresh');
        }
        
    }
    
    public function login()
	{
        $_POST = json_decode(file_get_contents('php://input'), true);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_verify');
        
        if($this->form_validation->run() == FALSE)
        {
            $respone = array(
                'status'=>false
            );
            echo json_encode($respone);  
        }
        else
        {
            $respone = array(
                'status'=>true
            );
            echo json_encode($respone);
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
    
    public function cek_sesi(){
        
        if($this->session->userdata('logged_in'))
        {
            echo'{"status":true}';
        }
        else
        {
            echo'{"status":false}';
        }
        
    }
    
    
}
