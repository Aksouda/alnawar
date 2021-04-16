<?php

/**
 * Created by PhpStorm.
 * User: Yash
 * Date: 21/6/17
 * Time: 9:38 PM
 */
class Contact extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_des()
    {
        $data = $this->db->get('contact_us');
        if($data->num_rows()){
            return $data->result_array()[0];
        }
        else{
            return null;
        }
    }
}