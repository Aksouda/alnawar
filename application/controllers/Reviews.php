<?php

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 22/6/17
 * Time: 9:27 AM
 */
class Reviews extends CI_Controller
{
    public function index()
    {
        $this->load->view('Reviews_view');
    }
    public function get_data()
    {
        $this->load->database();
        $this->load->model('review_model');
        if(isset($_REQUEST['search']["value"])){
            if($_REQUEST['search']["value"] != '' ){
                $this->db->like('name', $_REQUEST['search']["value"]);
                $this->db->or_like('Description', $_REQUEST['search']["value"]);
            }
        }
        $total_row = $this->db->get('testimonial')->num_rows();
       // print_r($total_row);
        $this->load->model('review_model');
        $row = $this->review_model->get_data();
        echo json_encode(array("recordsTotal"=>$total_row,
            "recordsFiltered"=>$total_row,'data'=>$row));
    }
    public function add()
    {

        $this->load->view('add_review');
    }
public function add_new(){
        if(isset($_POST)) {
            $this->load->model('review_model');
            $file_name = $_FILES['image']['name'];

            $new = array(
                'image'=>$file_name,
                'name' => $_POST['name'],
                'description' => $_POST['des']
            );
            //move_uploaded_file($file_tmp,"../uploads/".$file_name);

 move_uploaded_file($_FILES['image']['tmp_name'],'./uploads/testimonial/'.$file_name);
           
            $this->review_model->add_data($new);
            redirect(base_url('Reviews'));
        }
    }
    
    public function update($id){
        if(isset($_POST)) {
            $this->load->model('review_model');
$file_name = $_FILES['image']['name'];
$image_name=$_POST['image_name'];
            if($file_name !='')
            {
                $img_name=$file_name;
            }
            else
            {
                $img_name=$image_name;
            }            $new = array(
'image'=>$img_name,
                'name' => $_POST['name'],
                'description' => $_POST['des']
            );
move_uploaded_file($_FILES['image']['tmp_name'],'./uploads/testimonial/'.$file_name);
                $this->review_model->edit_review($new,$id);
            redirect(base_url('Reviews'));
        }
    }

    public function delete()
    {
        $this->load->model('review_model');
        $this->review_model->delete($_POST['id']);
    }

    public function edit($id)
    {
        $this->load->model('review_model');
        $data = $this->review_model->get_sep_review($id);
        $this->load->view('add_review',array('update'=>$data->result_array()));
    }
    public function multi_delete(){
        if(isset($_POST)){
            $_POST['id'] = explode(',',$_POST['id']);
            print_r($_POST['id']);
            $this->load->model('review_model');
            foreach ($_POST['id'] as $id){
                $this->review_model->delete($id);
            }
        }
    }


}
