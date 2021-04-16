<?php

/**About_modal
 * Created by PhpStorm.
 * User: tisyash
 * Date: 26/8/17
 * Time: 4:22 PM
 */
class About_modal extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_des()
    {
        $data = $this->db->get('about');
//        print_r($data->num_rows());exit;
        if($data->num_rows()){
            return $data->result_array();
        }
        else{
            return null;
        }
    }
}