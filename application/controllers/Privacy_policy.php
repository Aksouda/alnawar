<?php

/**
 * Created by PhpStorm.
 * User: Yash
 * Date: 21/6/17
 * Time: 9:37 PM
 */
class Privacy_policy extends CI_Controller
{
    public function index()
    {
        $this->load->model('Privacy_policy_model');
        $r_data = $this->Privacy_policy_model->get_des();
        $this->load->view('Privacy_policy_view',array('r_data'=>$r_data));
        if(isset($_POST['submit_des'])){
            if($r_data == null){
                $this->db->insert('Privacy_Policy',array('description'=>$_POST['des'],
                                                         'description_ar'=>$_POST['des_ar']));
                redirect(base_url('privacy_policy'), 'refresh');
            }
            else{
                $this->db->where(array('Privacy_Policy_id'=>$r_data[0]['Privacy_Policy_id']));
                $this->db->update('Privacy_Policy',array('description'=>$_POST['des'],
                                                         'description_ar'=>$_POST['des_ar']));
                redirect(base_url('privacy_policy'), 'refresh');
            }
        }
    }
}