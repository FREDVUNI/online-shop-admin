<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Category extends CI_Controller{
        public function __construct(){
            parent::__construct();
            is_logged_in();
            $this->load->helper('text');
            $this->load->model('backend/Category_model');
           
        }
        public function index(){
            $data['user'] = $this->db->get_where('admins',['email'=>
            $this->session->userdata('email')])->row_array();
            if(empty($data['user'])):
                return redirect('admin/404');
            endif;
    
            $this->load->view('templates/backend/header',$data);
            $this->load->view('templates/backend/sidebar');
            $data['category'] = $this->Category_model->getcategories();
            
            $this ->load->view('backend/category/categories',$data);
            $this->load->view('templates/backend/footer');
    
        }
        public function add(){
            $data['user'] = $this->db->get_where('admins',['email'=>
            $this->session->userdata('email')])->row_array();
            if(empty($data['user'])):
                return redirect('admin/404');
            endif;

            $this->form_validation->set_rules('category','Category','required|trim|callback_category_check|is_unique[categories.category]',
            ['is_unique'=>'This category already exits.']
            );

            if($this->form_validation->run() == false):
                $this->load->view('templates/backend/header',$data);
                $this->load->view('templates/backend/sidebar');
            
                $this ->load->view('backend/category/add',$data);
                $this->load->view('templates/backend/footer');
            else:
                $data['category']=$this->input->post('category');
                $slug = $this->generate_slug($this->input->post('category'));
                $catid = $this->input->post('catid');

                $this->Category_model->save($data, $slug);

                $this->session->set_flashdata('message','<div class="alert alert-info" role="alert">
                The Category Has Been Added Successfully.</div>');
                redirect('admin/categories');
            endif;
        }
        public function edit($slug){
            $data['user'] = $this->db->get_where('admins',['email'=>
            $this->session->userdata('email')])->row_array();

            $data['category'] = $this->Category_model->getcategories($slug);
            if(empty($data['category'])):
                return redirect('admin/404');
            endif;

            $this->form_validation->set_rules('category','category','required|trim|callback_category_check');
            if($this->form_validation->run() == false):
                $this->load->view('templates/backend/header',$data);
                $this->load->view('templates/backend/sidebar');
            
                $this ->load->view('backend/category/edit',$data);
                $this->load->view('templates/backend/footer');
            else:
                $catid = $this->input->post('catid');
                $category=$this->input->post('category');
                $slug = $this->generate_slug($this->input->post('category'));

                $this->db->set('category', $category);
                $this->db->set('slug',$slug);

                $this->db->where('catid', $catid);   
                $this->db->update('categories');

                $this->session->set_flashdata('message','<div class="alert alert-info" role="alert">
                The Category Has Been Updated Successfully.</div>');
                redirect('admin/categories');
            endif;
           
        }
        public function delete($slug){
            $data['user'] = $this->db->get_where('admins',['email'=>
            $this->session->userdata('email')])->row_array();

            $data['category'] = $this->Category_model->getcategories($slug);
            if(empty($data['category'])):
                return redirect('admin/404');
            endif;
            
            if($this->Category_model->deleteCategory($slug)):
                $this->session->set_flashdata('message', '<div class="alert alert-info role="alert">
                The Category Has Been Deleted Successfully.</div>');
                redirect('admin/categories');
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
        public function category_check($str){
            if (!preg_match('/^[a-zA-Z0-9&-. ]*$/',$str)){
                $this->form_validation->set_message('category_check', 'This category seems to be invalid.');
            return FALSE;    
                }else{
            return TRUE;    
            }
        }
    }