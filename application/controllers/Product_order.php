<?php

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 24/6/17
 * Time: 12:52 PM
 */
class Product_order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        //$this->load->model('Size_model', 'size');
        $this->load->database();
        if ($this->session->userdata['loggedIn'] == TRUE) {
            //do something
        } else {
            redirect('login'); //if session is not there, redirect to login page
        }

    }
    function index(){
        $this->load->view('Product_order_view');
    }
    public function get_data()
    {
        $this->load->model('Product_order_model');
        if(isset($_REQUEST['search']["value"])){
            if($_REQUEST['search']["value"] != '' ){
                $this->db->like('user_name', $_REQUEST['search']["value"]);
                $this->db->like('price', $_REQUEST['search']["value"]);
                $this->db->like('booking_status', $_REQUEST['search']["value"]);
            }
        }
        $this->db->select_sum('price');
        $this->db->group_by("order.order_id");
        $this->db->join('order_product','order.order_id=order_product.order_id');
        $total_row = $this->db->get('order')->num_rows();
        //print_r($this->db->last_query());
        $row = $this->Product_order_model->get_data();
        echo json_encode(array(
                    "recordsTotal"=>$total_row,
                    "recordsFiltered"=>$total_row,
                    'data'=>$row
                    ));
    }
    public function delete()
    {
        $this->load->model('Product_order_model');
        $this->Product_order_model->delete($_POST['id']);
    }

    public function edit($id)
    {
        $tax = $this->db->get_where('order_product',['order_id'=>$id])->row()->tax;
        define('tax_rate_order',$tax);
        $this->load->model('Product_order_model');
        $data = $this->Product_order_model->get_sep_order($id);
        $cartlist = $this->Product_order_model->get_products($id)[0];
        $total_amount = $this->Product_order_model->get_all_amounts($id);
        //  print_r($data->row_array());
        $this->load->view('Edit_order',array('data'=>$data->row_array(),'total_amount'=>$total_amount));
    }

    public function get_sep_order_product($id)
    {
        $this->load->model('Product_order_model');
        $cartlist = $this->Product_order_model->get_products($id)[0];
        $data = $cartlist->result_array();
        $cur = $this->Product_order_model->get_products($id)[1];
        for($i=0;$i < $cartlist->num_rows();$i++){
            if($data[$i]['quantity'] == 0){
                $data[$i]['quantity'] = $data[$i]['Text_quantity'];
            }
            $data[$i]['Actions'] = '<i class="glyphicon glyphicon-eye-open" onclick="review('. $data[$i]["uniq_id"].');"></i>';
            $data[$i]['total'] = $data[$i]['price']*$data[$i]['quantity'].' '.$cur;
            $data[$i]['index'] = $i + 1;
        }
        print_r(json_encode(array('data' => $data)));
    }

    public function each_product($id)
    {
        //$id = $_POST['id'];
        $this->load->model('Product_order_model');
        $data = $this->Product_order_model->each_product_of_order($id);
        //print_r($this->db->last_query());exit;
        $this->load->view('Each_produuct_in_order',array('data'=>$data->result_array()));
    }

    public function multi_delete(){
        if(isset($_POST)){
            $_POST['id'] = explode(',',$_POST['id']);
            print_r($_POST['id']);
            $this->load->model('Product_order_model');
            foreach ($_POST['id'] as $id){
                $this->Product_order_model->delete($id);
            }
        }
    }

    public function get_sep_product_order()
    {
        $id = $_POST['id'];
        $this->load->model('Product_order_model');
        $data = $this->Product_order_model->get_sep_order($id);
        $cartlist = $this->Product_order_model->get_products($id)[0];
        $this->load->view('order_details_for_sep',array('data'=>$data->result_array(),'cartlist'=>$cartlist,'cur'=>$this->Product_order_model->get_products($id)[1]));
    }
    public function update_order_proccess(){
        $id = $_POST['id'];
        $this->load->model('Product_order_model');
        $this->Product_order_model->update_my_proccess($id);
    }

    public function cancel_my_order()
    {
        $id = $_POST['id'];
        $this->load->model('Product_order_model');
        $this->Product_order_model->cencel_my_oder_Model($id);
    }
}