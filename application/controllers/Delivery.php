<?php

/**
 * Created by PhpStorm.
 * User: Yash
 * Date: 21/6/17
 * Time: 9:37 PM
 */
class Delivery extends CI_Controller
{
    public function index()
    {
        $this->load->model('Delivery_model');
        $r_data = $this->Delivery_model->get_des();
        $this->load->view('Delivery_view',array('r_data'=>$r_data));
        if(isset($_POST['submit_des'])){
            if($r_data == null){
                $this->db->insert('Delivery_tab',array('description'=>$_POST['des'],
                                                       'description_ar'=>$_POST['des_ar']));
                redirect(base_url('Delivery'), 'refresh');
            }
            else{
                $this->db->where(array('Delivery_id'=>$r_data[0]['Delivery_id']));
                $this->db->update('Delivery_tab',array('description'=>$_POST['des'],
                                                        'description_ar'=>$_POST['des_ar']));
                redirect(base_url('Delivery'), 'refresh');
            }
        }
    }
}