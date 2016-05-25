<?php
    class bookmark_model extends CI_Model {
        
        function __construct()
        {
            
        }
        
        function tampil()
        {
            return $this->db->get('bookmark');
        }
        
        function tampil_id($id)
        {
            return $this->db->get('bookmark');
        }
        
        function input($table, $data)
        {
            $this->db->insert($table, $data);
        }
        
        function update($table, $where, $data)
        {
            $this->db->where($table);
            $this->db->update($table, $data);
        }
        
        function delete($table, $where)
        {
            $this->db->where($where);
            $this->db->delete($table);
        }
        
    }