<?php

/**
 * Created by PhpStorm.
 * User: Yash
 * Date: 21/6/17
 * Time: 9:37 PM
 */
class Contact_us extends CI_Controller
{
    public function index()
    {
        $this->load->model('Contact');
        $r_data = $this->Contact->get_des();
        $this->load->view('Contact',array('r_data'=>$r_data));
        if(isset($_POST['submit_des'])){
            if($r_data == null){
                $this->db->insert('contact_us',array('description'=>$_POST['des'],
                                                     'description_ar'=>$_POST['des_ar']));
                redirect(base_url('Contact_us'), 'refresh');
            }
            else{
                $this->db->where(array('contact_us_id'=>$r_data['contact_us_id']));
                $this->db->update('contact_us',array('description'=>$_POST['des'],
                                                     'description_ar'=>$_POST['des_ar']));
                redirect(base_url('Contact_us'), 'refresh');
            }
        }
    }
}