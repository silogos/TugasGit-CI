<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CrudBookmark extends CI_Controller {

    private $sesi=array();
    
    function __construct()
    {
        
        parent::__construct();
        
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->sesi = $session_data['username'];
            $this->load->model('bookmark_model');
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
        $this->load->view('user/header',$sesi);
        $this->load->view('bookmark/tambah');
                
    }
    
    function tambah_aksi()
	{
	   
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('url', 'Url', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        
        if($this->form_validation->run() == FALSE)
        {
            $sesi['username']=$this->sesi;
            $this->load->view('bookmark/header',$sesi);
            $this->load->view('bookmark/tambah');
        }
        else
        {
            $title = $this->input->post('title');
            $url = $this->input->post('url');
            $desc = $this->input->post('description');
            
            $data = array('title'=>$title,'url'=>$url,'description'=>$desc);
            $query = $this->bookmark_model->input('bookmark',$data);
            
            if($query)
            {
                echo"<script>alert('Data Telah Terdaftar..!')</script>";
                redirect('home/bookmark','refresh');
            }
            else
            {
                echo"<script>alert('Data Gagal Terdaftar..!')</script>";
                redirect('home/bookmark','refresh');
            }
            
            
        }
                
    }
    
    function edit($id)
	{
        $where = array('id'=>$id);
        $data['bookmark'] = $this->bookmark_model->edit('bookmark',$where)->result();
        
        
        $sesi['username']=$this->sesi;
        $this->load->view('user/header',$sesi);
        $this->load->view('bookmark/edit',$data);
                
    }
    
    function edit_aksi()
	{
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $url = $this->input->post('url');
        $description = $this->input->post('description');
        
        $data = array(
            'title'=>$title,
            'url'=>$url,
            'description'=>$description
        );
        $where = array('id'=>$id);
        
        $query = $data['bookmark'] = $this->bookmark_model->update('bookmark',$where,$data);
        
        if($query){
            echo"<script>alert('Data Telah Diperbaharui..!')</script>";
        }else{
            echo"<script>alert('Data Gagal Diperbaharui..!')</script>";
        }
        
        redirect('home/bookmark','refresh');
                
    }
    
    function delete($id)
	{
        
        $where=array('id'=>$id);
        
        $query = $this->bookmark_model->delete('bookmark',$where);
        
        if($query){
            echo"<script>alert('Data Telah Terhapus..!')</script>";
        }else{
            echo"<script>alert('Data Gagal Terhapus..!')</script>";
        }
        
        redirect('home/bookmark','refresh');
                
    }
    
}