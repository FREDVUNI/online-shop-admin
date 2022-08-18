<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Product_model extends CI_Model{
        public function getproduct_url($slug = FALSE){
            $this->db->select('product_url.*,categories.category');
            $this->db->join('categories', 'product_url.catid = categories.catid');
            if($slug  === FALSE):
        		$query  = $this->db->get('product_url');
        		return $query->result_array();
        	endif;
        	$query =  $this->db->get_where('product_url',array('product_url.slug'=>$slug));
        	return $query->row_array();
        }
        public function save($data,$slug){
            $data =array(
                'product' =>$this->input->post('product'),
                'price' =>$this->input->post('price'),
                'catid' =>$this->input->post('catid'),
                'product_url' =>$this->input->post('product_url'),
                'quantity' =>$this->input->post('quantity'),
                'measure' =>$this->input->post('measure'),
                'image_url' =>$this->input->post('image_url'),
                'supplier_url' =>$this->input->post('supplier_url'),
                'slug' =>$slug,
            );
            return $this->db->insert('product_url',$data);
            
        }
        public function getProduct($id){
            $this->db->from('product_url');
            $this->db->where('id', $id);
            $result = $this->db->get('');
            
            if ($result->num_rows() > 0) {
              return $result->row();
            }
        }
        public function deleteProduct($slug){
            $id = $this->input->post('id');
            $this->db->where('id',$id);
            $this->db->delete('product_url',array('id'=>$id));
            return TRUE;
        }
    }