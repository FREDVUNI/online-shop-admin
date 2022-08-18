<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Category_model extends CI_Model{
        public function getcategories($slug = FALSE){
            if($slug  === FALSE):
        		$query  = $this->db->get('categories');
        		return $query->result_array();
        	endif;
        	$query =  $this->db->get_where('categories',array('slug'=>$slug));
        	return $query->row_array();
        }
        public function save($data,$slug){
            $data =array(
                'category' =>$this->input->post('category'),
                'slug' =>$slug,
            );
            return $this->db->insert('categories',$data);
            
        }
        public function deleteCategory($slug){
            $catid = $this->input->post('catid');
            $this->db->where('catid',$catid);
            $this->db->delete('categories',array('catid'=>$catid));
            return TRUE;
        }
    }