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
        $data['user'] = $this->user_model->edit('user',$where)->result();
        
        
        $this->load->view('user/header');
        $this->load->view('user/edit',$data);
                
    }
    
    function edit_aksi()
	{  
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('pass_word', 'PasswordLama', 'trim|required|callback_cek_pw');
        $this->form_validation->set_rules('password', 'PasswordBaru', 'trim|required');
        
        if($this->form_validation->run() == FALSE){
            $id = $this->input->post('id');
            $where = array('id'=>$id);
            $data['user'] = $this->user_model->edit('user',$where)->result();
        
        
            $this->load->view('user/header');
            $this->load->view('user/edit',$data);
        
        }
        else
        {
            echo"<script>alert('Data Telah Diperbaharui..!')</script>";
            redirect('home/user/','refresh');
            
        }
        
                
    }
    
    function cek_pw($pw)
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password_b = $this->input->post('password');
        
        $where = array(
            'id'=>$id,
            'username'=>$username,
            'password'=>md5($pw)
        );
        
        $data= array('password'=>md5($password_b));
        
        $query = $this->user_model->cek('user',$where);

        if($query)
        {
            $this->form_validation->set_message('cek_pw','Password Lama salah...!');
            return FALSE;
        }
        else
        {
            $this->user_model->update('user',$where,$data);
            return TRUE;
        }
    }
    
    function delete($id)
	{
        
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