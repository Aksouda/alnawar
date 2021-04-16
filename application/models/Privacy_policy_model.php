<?php

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 21/6/17
 * Time: 6:34 PM
 */
class Privacy_policy_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_des()
    {
        $data = $this->db->get('Privacy_Policy');
//        print_r($data->num_rows());exit;
        if($data->num_rows()){
            return $data->result_array();
        }
        else{
            return null;
        }
    }
}