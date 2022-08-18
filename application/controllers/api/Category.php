<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';
class category extends REST_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('api/Category_model');
       
    }
    public function index_get(){
        $category = $this->Category_model->get_categories();
        if(count($category) > 0):
            $this->response(array(
                "status" => 1,
                "message" =>"Categories Found",
                "data"    => $category
                       
            ), REST_Controller::HTTP_OK);
        else:
            $this->response(array(
                "status" => 0,
                "message" =>"No Categories Found",
                "data"    => $category
                       
            ), REST_Controller::HTTP_NOT_FOUND);
        endif;     
    }
    public function index_delete(){
        $catid = $this->delete('catid');

        if($catid === NULL):
            $this->response([
                'status' => false,
                'message' =>'Provide an id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        else:
            if($this->Category_model->delete_category($catid) > 0):
                $this->response(array(
                    "status" => true,
                    "catid" => $catid,
                    "message" =>"category Has Been Deleted.",                           
                ), REST_Controller::HTTP_NO_CONTENT);
            else:
                $this->response([
                    'status' => false,
                    'message' =>'category id Not Found'
                ], REST_Controller::HTTP_BAD_REQUEST);
            endif;
        endif;
    }
    public function index_post(){
        $data =[
            'category' =>$this->post('category'),
            'slug' =>$this->generate_slug($this->post('category')),
        ];
        if($this->Category_model->createcategory($data) > 0):
            $this->response(array(
                "status" => true,
                "message" =>"New category Has Been added.",                           
            ), REST_Controller::HTTP_CREATED);
        else: 
            $this->response([
            'status' => false,
            'message' =>'Failed To Create New Data.'
        ], REST_Controller::HTTP_BAD_REQUEST);
    endif;
    } 

    public function index_put(){
        $catid = $this->put('catid');
        $data =[
            'category' =>$this->post('category'),
            'slug' =>$this->generate_slug($this->post('category')),
        ];
        if($this->Category_model->update_category($data,$catid) > 0):
            $this->response(array(
                "status" => true,
                "message" =>"category Has Been Updated.",                           
            ), REST_Controller::HTTP_NO_CONTENT);
        else:
            $this->response([
                'status' => false,
                'message' =>'Failed To Update Data'
            ], REST_Controller::HTTP_BAD_REQUEST);
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
}