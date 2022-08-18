<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Admin extends CI_Controller{
        public function __construct(){
            parent::__construct();
            is_logged_in();
            $this->load->helper('text');
           
        }

        public function index(){
            $data['user'] = $this->db->get_where('admins',['email'=>
            $this->session->userdata('email')])->row_array();

            $this->load->view('templates/backend/header',$data);
            $this->load->view('templates/backend/sidebar');
            $this->load->view('backend/index',$data);
            
            $this->load->view('templates/backend/footer');
        }

    } 