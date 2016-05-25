<?php
    class home_model extends CI_Model {
        
        function __construct(){
            parent::__construct();
        }
        
        function user(){
            
            $query = $this->db->get('user');
            
            return $query;
            
        }
        
    }