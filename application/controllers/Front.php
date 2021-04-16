<?php
class Front extends CI_Controller 
{
    public function __construct(){
        parent::__construct();

         $this->load->model('front_model/Front_Model');
         $this->load->model('front_model/Category_Model');
         $this->load->model('front_model/Product_Model');
    }

    public function index()
    {
        if($this->session->userdata('site_lang') !== null)
        {
            $this->lang->load('content', $this->session->userdata('site_lang'));
        }
        else
        {
            $this->lang->load('content', 'english');
        }
        
        $categories = $this->Category_Model->get_categories();
        $data['categories'] = $categories;     
        $categories_with_preiority = $this->Category_Model->get_categories_with_preiority();
        $data["products_category_with_priority_main"] = $this->Category_Model->get_products_category_with_priority();

        $products_category_with_priority = $this->Category_Model->get_products_category_with_priority();
        $category_ids = array();
        /* looping through array */
        foreach($products_category_with_priority as $key=>$value){
            if(!empty($category_ids) && in_array($value['category_id'],$category_ids)) unset($products_category_with_priority[$key]);  //unset from $array if category_id already exists
            $category_ids[] = $value['category_id'];  // creating category_id array to compare with main array values
        }

        $data["products_category_with_priority"] = $products_category_with_priority;
        $data['products'] = $this->Product_Model->get_products();
        $data['latest_products'] = $this->Product_Model->get_latest_products();
        $data['categories_with_preiority'] = $categories_with_preiority;

        $this->load->view('front/header', $data);
        $this->load->view('front/index');
        $this->load->view('front/footer');
    }
       
        
}