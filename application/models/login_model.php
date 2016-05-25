<?php
    class login_model extends CI_Model {
        
        function login($username, $password){
            
            $this->db->select('id, username, password');
            $this->db->from('user');
            $this->db->where('username',$username);
            $this->db->where('password',md5($password));
            
            $query = $this->db->get();
            
            if($query->num_rows() == 1)
            {
                return $query->result();
            }
            else
            {
                return false;
            }
            
        }
        
    }