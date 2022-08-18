<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Product_model extends CI_Model{
        public function get_products($slug = FALSE){
            if($slug  === FALSE):
        		$query  = $this->db->get('product_url');
        		return $query->result_array();
        	endif;
        	$query =  $this->db->get_where('product_url',array('slug'=>$slug));
        	return $query->row_array();
        }
        public function delete_product($catid){
            $this->db->delete("product_url",['catid' =>$catid]);
            return TRUE;
        }
        public function createproduct($data){
            return $this->db->insert('product_url',$data);
            
        }
        public function update_product($data,$catid){
            return $this->db->update('product_url', $data ,['catid' => $catid]);
        }

    }