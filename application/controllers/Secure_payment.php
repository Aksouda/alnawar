<?php

/**
 * Created by PhpStorm.
 * User: Yash
 * Date: 21/6/17
 * Time: 9:37 PM
 */
class Secure_payment extends CI_Controller
{
    public function index()
    {
        $this->load->model('secure_payment_model');
        $r_data = $this->secure_payment_model->get_des();
        $this->load->view('secure_payment_view',array('r_data'=>$r_data));
        if(isset($_POST['submit_des'])){
            if($r_data == null){
                $this->db->insert('secure_payment',array('description'=>$_POST['des'],
                                                         'description_ar'=>$_POST['des_ar']));
                redirect(base_url('secure_payment'), 'refresh');
            }
            else{
                $this->db->where(array('secure_payment_id'=>$r_data[0]['secure_payment_id']));
                $this->db->update('secure_payment',array('description'=>$_POST['des'],
                                                         'description_ar'=>$_POST['des_ar']));
                redirect(base_url('secure_payment'), 'refresh');
            }
        }
    }
}