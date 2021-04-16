<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 27/6/17
 * Time: 1:49 PM
 */

class Dashboard_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_now_waiting($id = null)
    {
        if(!is_null($id)) {
            $this->db->where(['status' => $id]);
        }
        $data = $this->db->get('order_product');
        return $data->num_rows();
    }
    public function get_now_PUBLISH($id)
    {
        $this->db->where(['Draft' => $id]);
        $data = $this->db->get('product');
        return $data->num_rows();
    }
    public function get_now_Status($id)
    {
        $this->db->where(['status' => $id]);
        $data = $this->db->get('product');
        return $data->num_rows();
    }

    public function Cat_draft($id)
    {
        $data = $this->db->get_where('category',['draft'=>$id]);
        return $data->num_rows();
    }

    public function adminpanel_config()
    {
        $data = $this->db->get('config');
        return $data->result_array();
    }

    public function chart_time()
    {
        $this->db->distinct();
        $this->db->select('YEAR(create_date)');
        $data = $this->db->get('app_user');
        $abc = $data->result_array();
        $all = array();
        foreach ($abc[0] as $key=>$value){
            array_push($all,$value);
        }
        return $all;
    }

    public function get_data($years,$int)
    {
        $x = 1;
        $all_list = array();
        while($x < 13) {
            if ($int == 1) {
                $this->db->where(['YEAR(create_date)' => $years, 'MONTH(create_date)' => $x, 'name !=' => '']);
                $data = $this->db->get('app_user');
                array_push($all_list,$data->num_rows());
            } else {
                $this->db->where(['YEAR(create_date)' => $years, 'MONTH(create_date)' => $x, 'name ' => '']);
                $data = $this->db->get('app_user');
                array_push($all_list,$data->num_rows());
            }
            $x++;
        }
        $abc_month_name =['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $new_list = array();
        foreach ($all_list as $key => $value){
            $new_list[$abc_month_name[$key]] = $value;
        }
        return $new_list;
    }

    public function get_order_list_chart($years)
    {
        $x = 1;
        $all_list = array();
        while($x < 13) {
            $this->db->where(['YEAR(created_at)' => $years, 'MONTH(created_at)' => $x ]);
            $data = $this->db->get('product_order');
            array_push($all_list,$data->num_rows());
            $x++;
        }
        $abc_month_name =['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $new_list = array();
        foreach ($all_list as $key => $value){
            $new_list[$abc_month_name[$key]] = $value;
        }
        return $new_list;
    }

    public function get_total_num_of_item($years)
    {
        $data = $this->db->get_where('product_order',['YEAR(created_at)' => $years])->num_rows();
        return $data;
    }

    public function total_revanue($years)
    {
        $data = $this->db->get_where('product_order',['YEAR(created_at)' => $years])->result_array();
        $Val = 0;
        foreach ($data as $datum) {
            $Val += $datum['total_fees'];
        }
        return $Val ;
    }
}