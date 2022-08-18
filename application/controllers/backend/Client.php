<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Client extends CI_Controller{
        public function __construct(){
            parent::__construct();
            is_logged_in();
            $this->load->model('backend/Client_model');
            
        }
        public function index(){
            $data['user'] = $this->db->get_where('admins',['email'=>
            $this->session->userdata('email')])->row_array();

            $this->load->view('templates/backend/header',$data);
            $this->load->view('templates/backend/sidebar');
            $data['client'] = $this->Client_model->getclients();
            #if(empty($data['client'])):
            #    return redirect('admin/404');
            #endif;
            $this ->load->view('backend/client/clients',$data);
            $this ->load->view('templates/backend/footer');
        }
    }