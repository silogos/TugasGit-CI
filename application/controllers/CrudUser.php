<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CrudUser extends CI_Controller {

    private $sesi=array();
    private $notif=array();        

    function __construct()
    {
        
        parent::__construct();
        
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->sesi = $session_data['username'];
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
        $sesi['username']=$this->sesi;
        $this->load->view('templates/header',$sesi);
        $this->load->view('user/tambah');
        $this->load->view('templates/footer');        
    }
    
    function tambah_aksi()
	{
	   
        $this->form_validation->set_rules('username', 'Username', 'trim|required|callback_verify');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        
        if($this->form_validation->run() == FALSE)
        {
            
            $respone=array(
                'error'=>true,
                'msg'=>'Username Sudah Ada...!'
            );
            echo json_encode($respone);
        
        }
                
    }
    
    function verify($username)
    {
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $un = array('username'=>$username);
        $result = $this->user_model->tampil_id('user',$un);
        
        if($result)
        {
            return FALSE;
        }
        else{
        
            $data=array(
                'username'=>$username,
                'password'=>md5($password)
            );
        
            $insert=$this->user_model->input('user',$data);
            
            if($insert)
            {
                $respone = array(
                    'error'=>false,
                    'msg'=>'Data Telah Terdaftar..!'
                );
                echo json_encode($respone);    
                return TRUE;
            }
            else
            {
                $respone = array(
                    'error'=>true,
                    'msg'=>'Data Gagal Terdaftar..!'
                );
                echo json_encode($respone);    
                return TRUE;
            }
            
            
        }
        
    }
    
    function edit($id)
	{
        $where = array('id'=>$id);
        $data['user'] = $this->user_model->edit('user',$where)->result();
        
        
        $this->load->view('user/edit',$data);
                
    }
    
    function edit_aksi()
	{  
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('pass_word', 'PasswordLama', 'trim|required|callback_cek_pw');
        $this->form_validation->set_rules('password', 'PasswordBaru', 'trim|required');
        if($this->form_validation->run() == FALSE){
            $respone=array(
                'error'=>true,
                'msg'=>'Data belum benar...!'
            );
            echo json_encode($respone);
        }
        else
        {
            $respone=array(
                'error'=>false,
                'msg'=>'Data telah diperbaharui...!'
            );
            echo json_encode($respone);
            
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
            $respone = array(
                'error'=>false,
                'msg'=>'Data Telah Terhapus..!'
            );
            echo json_encode($respone);  
        }else{
            $respone = array(
                'error'=>true,
                'msg'=>'Data Gagal Terhapus..!'
            );
            echo json_encode($respone);
        }                
    }
    
}