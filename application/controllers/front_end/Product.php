<?php
class Product extends CI_Controller 
{
    public function __construct(){
        parent::__construct();

         $this->load->model('front_model/Product_Model');
         $this->lang->load('content', $this->session->userdata('site_lang'));
        
    }

    public function single_product($id=NULL)
    {
       
        $data = $this->Product_Model->get_single_product($id);
        
      


      /*   multiple images for the same product */
      
      $all_img= $this->Product_Model->get_all_images($id);

      /* print_r($all_img); */
      
        $colors = $this->Product_Model->get_color($id);

        $sizes = $this->Product_Model->get_sizes($id);
     /*  print_r($sizes); */
       
      $this->load->view('front/header');
      $this->load->view('front/product_page_nosidebar',array('product'=>$data,'images'=>$all_img ,'colors'=>$colors,'sizes'=>$sizes));
      $this->load->view('front/footer');
    }
        
}