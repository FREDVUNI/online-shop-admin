<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Product extends CI_Controller{
        public function __construct(){
            parent::__construct();
            is_logged_in();
            $this->load->helper('text');
            $this->load->model('backend/Product_model');
            $this->load->model('backend/Category_model');

           
        }
        public function index(){
            $data['user'] = $this->db->get_where('admins',['email'=>
            $this->session->userdata('email')])->row_array();

            $data['product'] = $this->Product_model->getproduct_url();
            if(empty($data['product'])):
                return redirect('admin/404');
            endif;
    
            $this->load->view('templates/backend/header',$data);
            $this->load->view('templates/backend/sidebar');
            $data['product'] = $this->Product_model->getproduct_url();
            
            $this ->load->view('backend/product/products',$data);
            $this->load->view('templates/backend/footer');
    
        }
        public function add(){
            $data['user'] = $this->db->get_where('admins',['email'=>
            $this->session->userdata('email')])->row_array();

            $data['product'] = $this->Product_model->getproduct_url();
            $data['category'] = $this->Category_model->getcategories();

            $this->form_validation->set_rules('product','Product','required|trim|callback_product_check|is_unique[product_url.product]',[
                'is_unique' =>'This product already exists.',
            ]);
            $this->form_validation->set_rules('catid','Category','required|trim');
            $this->form_validation->set_rules('price','Price','required|trim|callback_price_check');
            $this->form_validation->set_rules('product_url','Product URL','required|trim');
            $this->form_validation->set_rules('quantity','Product Quantity','required|trim|greater_than[0]');
            $this->form_validation->set_rules('measure','Measure','required|trim');
            $this->form_validation->set_rules('image_url','Product Image URL','required|trim');
            $this->form_validation->set_rules('supplier_url','Supplier URL','required|trim');

            if($this->form_validation->run() ==FALSE):
                $this->load->view('templates/backend/header',$data);
                $this->load->view('templates/backend/sidebar');
                $this ->load->view('backend/product/add',$data);
                $this ->load->view('templates/backend/footer');
            else:
                $data['product']=$this->input->post('product');
                $data['price']=$this->input->post('price');
                $data['catid']=$this->input->post('catid');
                $data['product_url']=$this->input->post('product_url');
                $data['quantity']=$this->input->post('quantity');
                $data['measure']=$this->input->post('measure');
                $data['image_url']=$this->input->post('image_url');
                $data['supplier_url']=$this->input->post('supplier_url');
                $slug = $this->generate_slug($this->input->post('product'));

                $this->Product_model->save($data, $slug);
                $this->session->set_flashdata('message', '<div class="alert alert-info role="alert">
                Product Has Been Saved Successfully.</div>');
                return redirect('admin/products');
            endif;
        }
        public function edit($slug){
            $data['user'] = $this->db->get_where('admins',['email'=>
            $this->session->userdata('email')])->row_array();

            $data['category'] = $this->Category_model->getcategories();
            $data['product'] = $this->Product_model->getproduct_url($slug);
            if(empty($data['product'])):
                return redirect('admin/404');
            endif;

            $this->form_validation->set_rules('product','Product','required|trim|callback_product_check');
            $this->form_validation->set_rules('catid','Category','required|trim');
            $this->form_validation->set_rules('price','Price','required|trim|callback_price_check');
            $this->form_validation->set_rules('product_url','Product URL','required|trim');
            $this->form_validation->set_rules('quantity','Product Quantity','required|trim|greater_than[0]');
            $this->form_validation->set_rules('measure','Measure','required|trim');
            $this->form_validation->set_rules('image_url','Product Image URL','required|trim');
            $this->form_validation->set_rules('supplier_url','Supplier URL','required|trim');

            if($this->form_validation->run() ==FALSE):
                $this->load->view('templates/backend/header',$data);
                $this->load->view('templates/backend/sidebar');
                $this ->load->view('backend/product/edit',$data);
                $this ->load->view('templates/backend/footer');
            else:
                $id = $this->input->post('id');
                $product=$this->input->post('product');
                $price=$this->input->post('price');
                $catid=$this->input->post('catid');
                $product_url=$this->input->post('product_url');
                $quantity=$this->input->post('quantity');
                $measure=$this->input->post('measure');
                $image_url=$this->input->post('image_url');
                $supplier_url=$this->input->post('supplier_url');
                $slug = $this->generate_slug($this->input->post('product'));

                $this->db->set('product', $product);
                $this->db->set('catid', $catid);
                $this->db->set('price', $price);
                $this->db->set('quantity', $quantity);
                $this->db->set('product_url', $product_url);
                $this->db->set('measure', $measure);
                $this->db->set('image_url', $image_url);
                $this->db->set('supplier_url', $supplier_url);
                $this->db->set('slug',$slug);

                $this->db->where('id', $id);   
                $this->db->update('product_url');
                $this->session->set_flashdata('message', '<div class="alert alert-info role="alert">
                    Product Has Been Updated Successfully.</div>');
                redirect(base_url('admin/products'));
             endif;
        }
        public function delete($slug){
            $data['user'] = $this->db->get_where('admins',['email'=>
            $this->session->userdata('email')])->row_array();

            $data['product'] = $this->Product_model->getproduct_url($slug);
            if(empty($data['product'])):
                return redirect('admin/404');
            endif;
            
            if($this->Product_model->deleteProduct($slug)):
                $this->session->set_flashdata('message', '<div class="alert alert-info role="alert">
                The Product Has Been Deleted Successfully.</div>');
             redirect('admin/products');
            endif;

        }
        public function generate_slug($slug, $separator = '-'){
            $accents_regex = '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i';
            $special_cases = array( '&' => 'and', "'" => '');
            $slug = mb_strtolower( trim( $slug ), 'UTF-8' );
            $slug = str_replace( array_keys($special_cases), array_values( $special_cases), $slug );
            $slug = preg_replace( $accents_regex, '$1', htmlentities( $slug, ENT_QUOTES, 'UTF-8' ) );
            $slug = preg_replace("/[^a-z0-9]/u", "$separator", $slug);
            $slug = preg_replace("/[$separator]+/u", "$separator", $slug);
            return $slug;
        }
        public function product_check($str){
            if (!preg_match('/^[a-zA-Z0-9&-. ]*$/',$str)):
                $this->form_validation->set_message('product_check', 'This product seems to be invalid.');
                return FALSE;    
            else:
                return TRUE;    
            endif;
        }
        public function price_check($str){
            if (!preg_match('/^[0-9-. ]*$/',$str)):
                $this->form_validation->set_message('price_check', 'This product price seems to be invalid.');
                return FALSE;    
            else:
                return TRUE;    
            endif;
        }

    }