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
    
    function detail_bookmark($id)
	{
        $where = array('id'=>$id);
        $data['bookmark'] = $this->bookmark_model->edit('bookmark',$where)->result();
        
        
        $sesi['username']=$this->sesi;
        $this->load->view('templates/header',$sesi);
        $this->load->view('bookmark/detail_bookmark',$data);
                
    }
    
    function tambah()
	{
        
        $sesi['username']=$this->sesi;
        $this->load->view('templates/header',$sesi);
        $this->load->view('bookmark/tambah');
                
    }
    
    function tambah_aksi($from)
	{
        if($from=='ang'){
            $_POST = json_decode(file_get_contents('php://input'), true);
        }
        
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('url', 'Url', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim');
        
        if($this->form_validation->run() == FALSE)
        {
            $respone = array(
                'error'=>true,
                'msg'=>'Harap isi data dengan benar...!'
            );
            echo json_encode($respone);  
        }
        else
        {
            $title = $this->input->post('title');
            $url = $this->input->post('url');
            $desc = nl2br($this->input->post('description'));
            
            $data = array('title'=>$title,'url'=>$url,'description'=>$desc);
            $query = $this->bookmark_model->input('bookmark',$data);
            
            if($query)
            {
                $respone = array(
                    'error'=>false,
                    'msg'=>'Data Telah Terdaftar..!'
                );
                echo json_encode($respone);
            }
            else
            {   
                $respone = array(
                    'error'=>true,
                    'msg'=>'Data Gagal Terdaftar..!'
                );
                echo json_encode($respone);
            }
            
            
        }
                
    }
    
    function edit($id)
	{
        $where = array('id'=>$id);
        $data['bookmark'] = $this->bookmark_model->edit('bookmark',$where)->result();
        
        
        $sesi['username']=$this->sesi;
        $this->load->view('bookmark/edit',$data);
                
    }
    
    function edit_aksi($from)
	{
        if($from=='ang'){
            $_POST = json_decode(file_get_contents('php://input'), true);
        }
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
            $respone = array(
                'error'=>false,
                'msg'=>'Data Telah Diperbaharui..!'
            );
            echo json_encode($respone);
        }else{
            $respone = array(
                'error'=>true,
                'msg'=>'Data Gagal Diperbaharui..!'
            );
            echo json_encode($respone);
        }
        
    }
    
    function delete($id)
	{
        
        $where=array('id'=>$id);
        
        $query = $this->bookmark_model->delete('bookmark',$where);
        
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