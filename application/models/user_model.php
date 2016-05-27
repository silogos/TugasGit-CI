<?php
    class user_model extends CI_Model {
        
        function __construct()
        {
            
        }
        
        function tampil($table, $where)
        {
            $this->db->from('user');
            $this->db->where('username!=',$where['username']);
            return $this->db->get();
        }
        
        function tampil_id($table, $where)
        {
            
             $query = $this->db->get_where($table,$where);
             if($query->num_rows()=='1'){
                return TRUE;   
             }else{
                return FALSE;
             }
             
        }
        
        function cek($table, $where)
        {
            
            $this->db->from($table);
            $this->db->where('id',$where['id']);
            $this->db->where('username',$where['username']);
            $this->db->where('password',$where['password']);

            $query = $this->db->get();
            
            if($query->num_rows()=='1'){
               return FALSE;   
            }else{
               return TRUE;
            }
             
        }
        
        function updatepw($table, $where, $data)
        {
            
            $this->db->where('id',$where['id']);
            $this->db->where('username',$where['username']);
            $this->db->where('password',$where['password']);

            $query=$this->db->update($table, $data);
            
            if($query->num_rows()=='1'){
               return TRUE;   
            }else{
               return FALSE;
            }
             
        }
        
        function input($table, $data)
        {
            $this->db->insert($table, $data);
        }
        
        function edit($table, $where)
        {
            return $this->db->get_where($table,$where);
        }
        
        function update($table, $where, $data)
        {
            $this->db->where($where);
            $this->db->update($table, $data);
        }
        
        function delete($table, $where)
        {
            $this->db->where($where);
            $this->db->delete($table);
            return TRUE;
        }
        
    }