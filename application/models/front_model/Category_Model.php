<?php
class Category_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function get_categories()
    {
        $query = $this->db->get("category");

        return $query->result_array();
    }

    public function get_categories_with_preiority()
    {
        $this->db->select("*")->from("category")->where("priority >", 0);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_single_cat($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get("category")->row();

        return $query;
    }

    public function get_product_count($cat_id)
    {
        $this->db->select("*");
        $this->db->from("product_category");
        $this->db->where("category_id",$cat_id);
        // return $query->num_rows();
        return $this->db->count_all_results();
    }

    public function get_products_category()
    {
        $this->db->select("*");
        $this->db->from("product_category");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_products_category_with_priority()
    {
        $query = $this->db->query("SELECT category_id, product_id FROM category INNER JOIN product_category ON product_category.category_id=category.id AND category.priority > 0");
        return $query->result_array();
    }
}
