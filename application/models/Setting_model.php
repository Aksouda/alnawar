<?php

/**
 * Created by PhpStorm.
 * Date: 20/6/17
 * Time: 5:43 PM
 */
class Setting_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }
    function get_currency(){
        $data = $this->db->get('currency');
        return $data->result_array();
    }
    function get_config(){
        $data = $this->db->get('config');
        return $data->result_array();
    }
    function get_user(){
        $data = $this->db->get('adminlogin');
        return $data->result_array();
    }
    function update_config($data){
        foreach ($data as $key => $value){
            $this->db->where('code',$key);
            $this->db->update('config',['value'=>$value]);
            echo $this->db->last_query();
        }
    }
    function update_user($data,$id){
        $this->db->where(['id'=>$id]);
        $_SESSION['username'] = $_POST['username'];
        $this->db->update('adminlogin',$data);
    }
    function cat_list(){
        $data = $this->db->get('category');
        return $data->result_array();
    }
    function best_cat_list(){
        $this->db->select(['id','name','parent_id']);
        $manage = $this->db->get('category');
        $rows = $manage->result_array();
        $data = array();
        foreach( $rows as $row) {
            $tmp = array();
            $tmp['id'] = $row['id'];
            $tmp['name'] = $row['name'];
            $tmp['parent_id'] = $row['parent_id'];
            array_push($data, $tmp);
        }
        $itemsByReference = array();

        // Build array of item references:
        foreach($data as $key => &$item) {
            $itemsByReference[$item['id']] = &$item;
            // Children array:
            $itemsByReference[$item['id']]['nodes'] = array();
        }
        // Set items as children of the relevant parent item.
        foreach($data as $key => &$item)  {
            //echo "<pre>";print_r($itemsByReference[$item['parent_id']]);die;
            if($item['parent_id'] && isset($itemsByReference[$item['parent_id']])) {
                $itemsByReference [$item['parent_id']]['nodes'][] = &$item;
            }
        }
        foreach ($itemsByReference as $tis){
            if(!empty($tis['nodes'])){
                foreach ($tis['nodes'] as $tis_child){
                    unset($itemsByReference[$tis_child['id']]);
                    unset($data[$tis_child['id']]);
                }
            }
        }
        return $itemsByReference;
    }
}