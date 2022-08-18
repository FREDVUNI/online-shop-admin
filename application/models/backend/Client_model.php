<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Client_model extends CI_Model{
        public function getclients($slug = FALSE){
            if($slug  === FALSE):
        		$query  = $this->db->get('clients');
        		return $query->result_array();
        	endif;
        	$query =  $this->db->get_where('clients',array('slug'=>$slug));
        	return $query->row_array();
        }
    }