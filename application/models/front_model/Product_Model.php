<?php
class Product_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function get_products()
    {
        $query = $this->db->get("product");

        return $query->result_array();
    }

    public function get_single_product($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get("product")->row();

        return $query;
    }

    public function get_cat($id)
    {
            $this->db->select('product_category.category_id,product.id,product.*');              
            $this->db->from('product,product_category');
            $this->db->where('product.id=product_category.product_id');
            $this->db->where('product_category.category_id',$id);
            $q= $this->db->get();
            return $q->result_array();

            // print_r($q->result_array());
            
    }

    // public function get_single_product($id)
    // {
        
         
    //    /**$this->db->from('vehicles');
    //         $this->db->where('id_vehicle', $id_vehicle);*/
    //         $query = $this->db->query("SELECT * FROM product WHERE id = '$id'");
    //         $row = $query->row();
    //         return $row;/*$this->db->get()->row();*/
       
    //    /*  return $this->db->get_where('product',['id'=>$id])->row(); */
       
       
       
    // }

    public function get_all_images($id)
    {
            $query = $this->db->query("SELECT * FROM product_image WHERE product_id = '$id'");
            $row = $query->result_array();
            return $row;
    }


    public function get_color($id)
    {
            $query = $this->db->query("SELECT * FROM product_size  WHERE product_id = '$id'");
            $row = $query->result_array();
            return $row;
    }




    public function get_sizes($id)
    {
            $this->db->select('product_size.product_id,product_size.size_id,size.size_id,size.name');              
            $this->db->from('product_size,size');
            $this->db->where('size.size_id=product_size.size_id');
            $this->db->where('product_size.product_id',$id);
            $q= $this->db->get();
            return $q->result_array();
            
    }

    public function get_latest_products()
    {
        $this->db->select('*'); 
         $this->db->from('product'); 
        $this->db->order_by('id','DESC');
        $this->db->limit(10);
       $q = $this->db->get();
       $result = $q->result_array();
       return $result;
       
    }

}
