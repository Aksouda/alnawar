<?php

/**
 * Created by PhpStorm.
 * User: tisyash
 * Date: 26/8/17
 * Time: 4:18 PM
 */
class About extends CI_Controller
{
    public function index()
    {
        $this->load->model('About_modal');
        $r_data = $this->About_modal->get_des();
        $this->load->view('About_view',array('r_data'=>$r_data));
        if(isset($_POST['submit_des'])){
            if($r_data == null){
                $this->db->insert('about',array('description'=>$_POST['des']));
                redirect(base_url('about'), 'refresh');
            }
            else{
                $this->db->where(array('about_id'=>$r_data[0]['about_id']));
                $this->db->update('about',array('description'=>$_POST['des']));
                redirect(base_url('about'), 'refresh');
            }
        }
    }
}