<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';
class Product extends REST_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('api/Product_model');
       
    }
    public function index_get(){
        $category = $this->Product_model->get_products();
        if(count($category) > 0):
            $this->response(array(
                "status" => 1,
                "message" =>"Products Found",
                "data"    => $category
                       
            ), REST_Controller::HTTP_OK);
        else:
            $this->response(array(
                "status" => 0,
                "message" =>"No Products Found",
                "data"    => $category
                       
            ), REST_Controller::HTTP_NOT_FOUND);
        endif;     
    }
}