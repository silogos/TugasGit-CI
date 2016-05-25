<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CrudUser extends CI_Controller {

    function __construct()
    {
        
        parent::__construct();
        
        if($this->session->userdata('logged_in'))
        {
            $this->load->model('user_model');
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
        }
        else
        {
            redirect('login','refresh');
        }
        
    }
    
    function tambah()
	{
        
        $this->load->view('user/header');
        $this->load->view('user/tambah');
                
    }
    
    function tambah_aksi()
	{
	   
        $this->form_validation->set_rules('username', 'Username', 'trim|required|callback_verify');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('user/header');
            $this->load->view('user/tambah');
        }
        else
        {
            echo"<script>alert('Data Telah Terdaftar..!')</script>";
            redirect('home/user','refresh');
        }
                
    }
    
    function verify($username)
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $un = array('username'=>$username);
        $result = $this->user_model->tampil_id('user',$un);
        if($result){
            $this->form_validation->set_message('verify','Username sudah ada...!');
            return FALSE;
        }else{
            $data=array(
                'username'=>$username,
                'password'=>md5($password)
            );
            $this->user_model->input('user',$data);
            return TRUE;
        }
        
    }
    
    function edit($id)
	{
        $where = array('id'=>$id);
        $data['user'] = $this->user_model->edit('user',$id)->result();
        
        $this->load->view('user/header');
        $this->load->view('user/edit',$data);
                
    }
    
    function delete($id)
	{
        $this->load->model('user_model');
        
        $where=array('id'=>$id);
        
        $query = $this->user_model->delete('user',$where);
        
        if($query){
            echo"<script>alert('Data Telah Terhapus..!')</script>";
        }else{
            echo"<script>alert('Data Gagal Terhapus..!')</script>";
        }
        
        redirect('home/user','refresh');
                
    }
    
}