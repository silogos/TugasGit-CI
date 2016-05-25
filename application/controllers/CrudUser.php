<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CrudUser extends CI_Controller {

    function __construct()
    {
        
        parent::__construct();
        
        if($this->session->userdata('logged_in'))
        {
            $this->load->model('user_model');
        }
        else
        {
            redirect('login','refresh');
        }
        
    }
    
    function tambah_user()
	{
        
        $this->load->view('');
                
    }
    
    function edit_user($id)
	{
        $where = array('id'=>$id);
        $data['user'] = $this->user_model->tampil()->result();
        
        $this->load->view('home/header');
        $this->load->view('home/user_view',$data);
        $this->load->view('home/footer');
                
    }
    
    function delete_user($id)
	{
        $this->load->model('user_model');
        $data['user'] = $this->user_model->tampil()->result();
        
        $this->load->view('home/header');
        $this->load->view('home/user_view',$data);
        $this->load->view('home/footer');
                
    }
    
}