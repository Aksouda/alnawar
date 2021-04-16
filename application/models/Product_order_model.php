<?php
class Product_order_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    function get_data(){
        $this->db->select('order.*,order_product.status as order_status');
        $collams = array(
            1=>'created_at',
            2=>'user_name',
            3=>'price',
            4=>'payment_type',
            5=>'booking_status',
        );

        //search __- Search
        if(isset($_REQUEST['search']["value"])){
            if($_REQUEST['search']["value"] != '' ){
                $x = 0;
                foreach ($collams as $each){
                    if($x == 0){
                        $this->db->like($each, $_REQUEST['search']["value"]);
                    }else{
                        $this->db->or_like($each, $_REQUEST['search']["value"]);
                    }
                    $x++;
                }
            }
        }
        $ord_ = $_REQUEST['order'][0]['column'];
        //print_r($collams[$ord_]);
        //search __- Search
//        limit and Other Stop
        $this->db->limit(isset($_REQUEST['length'])?$_REQUEST['length']:10,isset($_REQUEST['start'])?$_REQUEST['start']:0);

        if(isset($_REQUEST['order'][0]['column'])){
            if($_REQUEST['order'][0]['column'] == 0){
                $this->db->order_by('id','DESC');
            }else {
                $this->db->order_by($collams[$_REQUEST['order'][0]['column']], $_REQUEST['order'][0]['dir']);
            }
        }
//        limit and Other Stop
        $this->db->select_sum('price');
        $this->db->group_by("order.order_id");
        $this->db->join('order_product','order.order_id=order_product.order_id');
        $row = $this->db->get('order');
        $data = $row->result_array();
       // print_r($data);
        for($i=0;$i <$row->num_rows();$i++){
            $data[$i]['cheked'] = '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="Checkbox checkboxes" value="'. $data[$i]['order_id'] .'" name="multy[]" id="multy"/>
                                        <span></span></label>';
            $data[$i]['Actions'] = '<div class="btn-group"><button class="btn btn-xs red dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions<i class="fa fa-angle-down"></i></button><ul class="dropdown-menu pull-right" role="menu">';
            $status_now = $this->db->get_where('order_product',['order_id'=> $data[$i]['order_id']])->row()->status;
            if($status_now == '0'){
                $data[$i]['Actions'] .= '<li><a href="javascript:;" onclick="process_Work('. $data[$i]['order_id'] .');"><i class="glyphicon glyphicon-ok"></i> Process</a></li>';
                $data[$i]['Actions'] .= '<li><a href="javascript:;" onclick="cencel_my_product('. $data[$i]['order_id'] .',\''. $data[$i]["user_name"] .'\');"><i class="glyphicon glyphicon-remove"></i> Cencel Order</a></li>';
            }
            $data[$i]['Actions'] .= '<li><a href="'. base_url('Product_order/edit/') . $data[$i]['order_id'] .'"><i class="glyphicon glyphicon-edit"></i> Edit</a></li>
                                     <li><a href="javascript:;" onclick="delete_review('. $data[$i]['order_id'] .');"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>';
            $data[$i]['Actions'] .= '</ul></div>';
            if($data[$i]['payment_type'] == 'cash'){
                $data[$i]['payment_type'] = '<span class="label label-success" >Cash</span>';
            }
            else{
                $data[$i]['payment_type'] = '<span class="label label-default" >Paypal</span>';
            }
            switch ($status_now){
                case '0':
                    $data[$i]['booking_status'] = '<span class="label label-default" >WAITING</span>';
                    break;
                case "1":
                    $data[$i]['booking_status'] = '<span class="label label-success" >PROCESSED</span>';
                    break;
                case "2":
                    $data[$i]['booking_status'] = '<span class="label label-danger" >CANCEL</span>';
                    break;
            }

        }
        return $data;
    }
    function delete($ids){
        $this->db->where(['id'=>$ids]);
        $this->db->delete('order');
        $this->db->where(['order_id'=>$ids]);
        $this->db->delete('order_product');
    }
    function get_sep_order($id){
        $this->db->select('order.*');
        $this->db->select_sum('price');
        $this->db->where(['order_id'=>$id]);
        $this->db->group_by('order_id');
        $data = $this->db->get('order');
        return $data;
    }

    public function get_products($id)
    {
        $this->db->select('product.*,order.*,order.id as uniq_id');
        $this->db->where(['order_id'=>$id]);
        $this->db->join('product','order.product_id = product.id');
        //$this->db->group_by('order_id');
        $data = $this->db->get('order');
        $cur = $this->db->where(['code'=>'CURRENCY']);
        $cur = $this->db->get('config');
        return array($data,$cur->result_array()[0]['value']);
    }

    public function update_my_proccess($id)
    {
        $this->db->where(['order_id'=>$id]);
        $data = $this->db->update('order_product',array('status'=>'1'));
        print_r($this->db->last_query());
    }

    public function cencel_my_oder_Model($id)
    {
        $this->db->where(['order_id'=>$id]);
        $data = $this->db->update('order_product',array('status'=>'2'));
    }

    public function each_product_of_order($id)
    {
        $this->db->where(['order.id'=>$id]);
        $this->db->join('product','order.product_id = product.id');
        $data = $this->db->get('order');
        return $data;
    }
    function get_all_amounts($id){
        $this->db->where(['order_id'=>$id]);
        $data = $this->db->get('order_product');
        $row = $data->result_array();
        $all = 0;
        $x = 0;
        while($x < $data->num_rows()){
            $all = $row[$x]['amount'] + $all;
            $x++;
        }
        return $all;
    }
}
