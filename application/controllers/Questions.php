<?php

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 22/6/17
 * Time: 9:27 AM
 */
class Questions extends CI_Controller
{
    public function index()
    {
        $this->load->view('Questions_view');
    }
    public function get_data()
    {
        $this->load->database();
        $this->load->model('review_model');
        if(isset($_REQUEST['search']["value"])){
            if($_REQUEST['search']["value"] != '' ){
                $this->db->like('question', $_REQUEST['search']["value"]);
                $this->db->or_like('Description', $_REQUEST['search']["value"]);
            }
        }
        $total_row = $this->db->get('faq')->num_rows();
        $this->load->model('Questions_model');
        $row = $this->Questions_model->get_data();
        echo json_encode(array("recordsTotal"=>$total_row,
            "recordsFiltered"=>$total_row,'data'=>$row));
    }
    public function add()
    {

        $this->load->view('add_Questions');
    }
    public function add_new(){
        if(isset($_POST)) {
            $this->load->model('Questions_model');
            $new = array(
                'question' => $_POST['Question'],
                'description' => $_POST['des']
            );
            $this->Questions_model->add_data($new);
            redirect(base_url('Questions'));
        }
    }
    public function update($id){
        if(isset($_POST)) {
            $this->load->model('Questions_model');
            $new = array(
                'question' => $_POST['Question'],
                'description' => $_POST['des']
            );
                $this->Questions_model->edit_review($new,$id);
            redirect(base_url('Questions'));
        }
    }

    public function delete()
    {
        $this->load->model('Questions_model');
        $this->Questions_model->delete($_POST['id']);
    }

    public function edit($id)
    {
        $this->load->model('Questions_model');
        $data = $this->Questions_model->get_sep_review($id);
        $this->load->view('add_Questions',array('update'=>$data->result_array()));
    }
    public function multi_delete(){
        if(isset($_POST)){
            $_POST['id'] = explode(',',$_POST['id']);
            print_r($_POST['id']);
            $this->load->model('Questions_model');
            foreach ($_POST['id'] as $id){
                $this->Questions_model->delete($id);
            }
        }
    }


}