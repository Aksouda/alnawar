<?php

/**
 * Created by PhpStorm.
 * User: Yash
 * Date: 21/6/17
 * Time: 9:37 PM
 */
class Terms_And_Conditions extends CI_Controller
{
    public function index()
    {
        $this->load->model('Term_condition_model');
        $r_data = $this->Term_condition_model->get_des();
        $this->load->view('Terms_and_conditions',array('r_data'=>$r_data));
        if(isset($_POST['submit_des'])){
            if($r_data == null){
                $this->db->insert('term_condition',array('description'=>$_POST['des'],
                                                         'description_ar'=>$_POST['des_ar']));
                redirect(base_url('Terms_And_Conditions'), 'refresh');
            }
            else{
                $this->db->where(array('term_condition_id'=>$r_data[0]['term_condition_id']));
                $this->db->update('term_condition',array('description'=>$_POST['des'],
                                                         'description_ar'=>$_POST['des_ar']));
                redirect(base_url('Terms_And_Conditions'), 'refresh');
            }
        }
    }
}