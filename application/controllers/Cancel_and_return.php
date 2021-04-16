<?php

/**
 * Created by PhpStorm.
 * User: Yash
 * Date: 21/6/17
 * Time: 9:37 PM
 */
class Cancel_and_return extends CI_Controller
{
    public function index()
    {
        $this->load->model('Cancel_and_return_model');
        $r_data = $this->Cancel_and_return_model->get_des();
        $this->load->view('Cancel_and_return_view',array('r_data'=>$r_data));
        if(isset($_POST['submit_des'])){
            if($r_data == null){
                $this->db->insert('Cancel_and_return',array('description'=>$_POST['des'],
                                                            'description_ar'=>$_POST['des_ar']));
                redirect(base_url('Cancel_and_return'), 'refresh');
            }
            else{
                $this->db->where(array('Cancel_and_return_id'=>$r_data[0]['Cancel_and_return_id']));
                $this->db->update('Cancel_and_return',array('description'=>$_POST['des'],
                                                            'description_ar'=>$_POST['des_ar']));
                redirect(base_url('Cancel_and_return'), 'refresh');
            }
        }
    }
}